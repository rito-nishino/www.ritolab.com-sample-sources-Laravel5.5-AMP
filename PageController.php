<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index(Request $request)
  {
    // AMPページの判定
    $parse_url = $this->parseUrl($request->url());
    $is_amp = $this->isAmp($parse_url);

    // canonical設定用URL
    $canonical_url = $this->getCanonicalUrl($request->url());

    if($is_amp) {
      // styleデータを取得
      $styles = $this->getStyleCustom();

      $message = 'AMPページ';
      return view('amp.page', ['message' => $message, 'canonical_url' => $canonical_url, 'styles' => $styles]);
    } else {
      $message = '通常ページ';
      return view('page', ['message' => $message, 'canonical_url' => $canonical_url]);
    }
  }

  /**
   * URLをパースする
   * @param $request
   */
  private function parseUrl($url) {
    return parse_url($url);
  }

  /**
   * URLからAMPページ指定か判定する
   * @param $parse_url
   * @return bool
   */
  private function isAmp($parse_url) {
    if(strpos($parse_url['path'],'.amp') !== false){
      return true;
    } else {
      return false;
    }
  }

  /**
   * Canonical用のURLを返却する
   * @param $url
   * @return mixed|string
   */
  private function getCanonicalUrl($url) {
    if(strpos($url,'.amp') !== false){
      return str_replace('.amp', '', $url);
    } else {
      return sprintf('%s.amp', $url);
    }
  }

  /**
   * CSSファイルからAMPに必要なものを返却する
   * @return string
   */
  private function getStyleCustom() {
    $data = '';
    $data .= file_get_contents(resource_path('assets/build/css/reset.css'));
    $data .= file_get_contents(resource_path('assets/build/css/page.css'));
    $data .= file_get_contents(resource_path('assets/build/css/page-amp.css'));

    $target = array('@charset "UTF-8";');
    $change = array('');

    $data =  str_replace($target,$change,$data);

    return$data;
  }
}
