<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ListModel;

use App\Repositories\ListRepository;

class ListController extends Controller
{
    /**
     *一覧ページ
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    $lists = ListModel::orderBy('created_at', 'asc')->get();
        return view('lists.index', [
            'lists' => $lists,
        ]);
    }
    public function store()
    {
        return view('lists.add');
    }
    public function edit($id)
    {
        $lists = ListModel::find($id);
        return view('lists.edit', [
            'lists' => $lists,
        ]);
    }
    public function detail($id)
    {
        $lists = ListModel::find($id);
        return view('lists.detail', [
            'lists' => $lists,
        ]);
    }

    /**
     *店舗登録ページ
     * 
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        //バリデーションの処理を書く
        $validated = $request->validate([ 
           'title' => 'required | string', 
           'genre' => 'required | string',
           'place' => 'required | string',
       ]);
        //登録処理を書く(新しくレコードを追加する)
        $list = new ListModel();
        $list->title = $request->title;
        $list->genre = $request->genre;
        $list->place = $request->place;
        $list->detail = $request->detail;
        $list->save();
        // 画像を保存
        // ファイルチェック
        if( $request->hasFile('image') ) {
            // 保存処理
            $request->file('image')->store('public/');
        }
        //一覧画面に戻す
        return redirect('/lists');
    }    
    

    /**
     *編集ボタンを押した時の処理
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        //バリデーションの処理を書く
        $validated = $request->validate([ 
            'title' => 'required | string', 
            'genre' => 'required | string',
            'place' => 'required | string',
        ]);
        //既存のレコードを取得して、編集してから保存する
        $list = ListModel::where('id','=', $request->id)->update([
            'title' => $request->title,
            'genre' => $request->genre,
            'place' => $request->place,
            'detail' => $request->detail,
        ]);
        

        return redirect('/lists');
    }

    /**
     *レコードを削除
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        //既存のレコードを取得して、削除する
        $list = ListModel::where('id','=', $request->id)->first();
        $list->delete();

        return redirect('/lists');

    }
}

