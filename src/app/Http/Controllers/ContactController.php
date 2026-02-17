<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    /**
     * お問い合わせフォーム入力ページ
     */
    public function index(Request $request)
    {
        $categories = Category::all();

        return view('contact.index', [
            'categories' => $categories,
            'contact'    => $request->all() // ← これを追加
        ]);
    }

    /**
     * お問い合わせフォーム確認ページ
     */
    public function confirm(ContactRequest $request)
    {
        $contact = $request->validated();

        $request->session()->put('contact_input', $contact);

        return view('contact.confirm', compact('contact'));
    }


    public function confirmTest()
    {
        $contact = [
            'first_name'    => '山田',
            'last_name'     => '太郎',
            'gender'        => 1,
            'email'         => 'test@example.com',
            'tel1'          => '080',
            'tel2'          => '1234',
            'tel3'          => '5678',
            'address'       => '東京都渋谷区千駄ヶ谷1-2-3',
            'building'      => '千駄ヶ谷マンション101',
            'category_name' => '商品の交換について',
            'message'       => "届いた商品が注文した商品ではありませんでした。\n商品の取り替えをお願いします。"
        ];

        return view('contact.confirm', compact('contact'));
    }


    /**
     * PG03 サンクスページ
     */
    public function thanks(Request $request)
    {
        // セッションから入力データを取得

        /*
        $data = $request->session()->get('contact_input');

        if (!$data) {
            // 入力データがない場合はトップにリダイレクト
            return redirect('/');
        }

        // セッションの入力データを削除
        $request->session()->forget('contact_input');

        return view('contact.thanks', compact('data'));

        */

        return view('contact.thanks');
    }
}