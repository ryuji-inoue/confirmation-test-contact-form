<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    /**
     * お問い合わせフォーム入力ページ
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * お問い合わせフォーム確認ページ
     */

    public function confirm(Request $request)
    //public function confirm(ContactRequest $request)
    {
        // バリデーション済みデータを取得
        //$validated = $request->validated();

        // セッションに一時保存して、確認ページで表示
        //$request->session()->put('contact_input', $validated);

        return view('contact.confirm');
        //return view('contact.confirm', compact('validated'));
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