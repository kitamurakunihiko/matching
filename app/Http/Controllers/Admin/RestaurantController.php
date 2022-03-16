<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class RestaurantController extends Controller
{
    // HTTPリクエストを送るURL
    private const REQUEST_URL = 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/';

    // APIキー
    private $api_key;
    
    
    public function index()
    {
      return view('admin.restaurant.index');
    }

    public function search(Request $request)
    {
      // インスタンス生成
      $client = new Client();

      // HTTPリクエストメソッド
      $method = 'GET';

      // APIキーを取得
      $this->api_key = config('hotpepper.api_key');

      // APIキーや検索ワードなどの設定を記述
      $options = [
        'query' => [
          'key' => 'f12d612c3913ac64',
          'keyword' => $request->keyword,
          'count' => 100,
          'format' => 'json',
        ],
      ];

      // HTTPリクエストを送信
      $response = $client->request($method, self::REQUEST_URL, $options);

      // 'format' => 'json'としたのでJSON形式でデータが返ってくるので、連想配列型のオブジェクトに変換
      $restaurants = json_decode($response->getBody(), true)['results'];

      // index.blade.phpを表示する
      return view('admin.restaurant.search', ['restaurants' => $restaurants]);
    }
}
