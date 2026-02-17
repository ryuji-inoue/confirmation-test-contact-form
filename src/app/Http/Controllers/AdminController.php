<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminController extends Controller
{
    /**
     * 管理画面
     */
    public function index(Request $request)
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.index', compact('contacts'));
    }

    /**
     * 検索
     */
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $contacts = Contact::with('category') // カテゴリを一緒に取得
            ->when($keyword, function ($query, $keyword) {
                $query->where(function($q) use ($keyword) {
                    $q->where('first_name', 'like', "%{$keyword}%")
                    ->orWhere('last_name', 'like', "%{$keyword}%")
                    ->orWhere('email', 'like', "%{$keyword}%");
                });
            })
            ->latest()
            ->paginate(10);

        return view('admin.index', compact('contacts'));
    }

    /**
     * 検索リセット
     */
    public function reset()
    {
        return redirect()->route('admin.index');
    }

    /**
     * お問い合わせフォーム削除
     */
    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'お問い合わせを削除しました。');
    }

    /**
     * エクスポート（CSV形式で出力）
     */
    public function export()
    {
        $contacts = Contact::all();

        $filename = 'contacts_export_' . date('Ymd_His') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename={$filename}",
        ];

        $callback = function() use ($contacts) {
            $handle = fopen('php://output', 'w');
            // ヘッダー行
            fputcsv($handle, ['ID', '名前', '性別', 'メール', '電話番号', '住所', 'お問い合わせ種類', '内容', '作成日']);
            
            foreach ($contacts as $contact) {
                fputcsv($handle, [
                    $contact->id,
                    $contact->name,
                    $contact->gender,
                    $contact->email,
                    $contact->phone,
                    $contact->address,
                    $contact->contact_type,
                    $contact->message,
                    $contact->created_at,
                ]);
            }

            fclose($handle);
        };

        return response()->stream($callback, 200, $headers);
    }
}
