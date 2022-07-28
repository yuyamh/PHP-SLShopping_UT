<?php

namespace Tests\Unit\Brand;

use App\Admin\Requests\ItemRequest;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

/**
 * 商品リクエストテスト
 *
 * コマンド実行する場合はプロジェクトのルートディレクトリ上で実行すること
 * $ ./vendor/bin/phpunit ./tests/Unit/Item/ItemRequestTest.php
 */
class ItemRequestTest extends TestCase
{

    /**
     * 概要 商品名・商品説明のパラメーター化テスト
     * 条件 データプロバイダメソッドのラベル
     * 結果 条件に応じた結果(true, false)を返すこと
     * 
     * @dataProvider validationDataProvider
     */
    public function test_パラメーター化テスト()
    {
   
    }
    // データプロバイダメソッド
    public function validationDataProvider(): array
    {
        // 'ラベル' => [パラメータ, 期待値]
        return [
            '商品名が1文字かつ商品説明が1文字の場合' => [
                [
                    'name' => '',
                    'description' => '',
                ],
                /* 期待値 */
            ],
            '商品名が10文字かつ商品説明が50文字の場合' => [
                [
                    'name' => '',
                    'description' => '',
                ],
                /* 期待値 */
            ],
            '商品名が10文字かつ商品説明が1文字の場合' => [
                [
                    'name' => '',
                    'description' => '',
                ],
                /* 期待値 */
            ],
            '商品名が1文字かつ商品説明が50文字の場合' => [
                [
                    'name' => '',
                    'description' => '',
                ],
                /* 期待値 */
            ],
            '商品名が0文字かつ商品説明が0文字の場合' => [
                [
                    'name' => '',
                    'description' => '',
                ],
                /* 期待値 */
            ],
            '商品名が11文字かつ商品説明が51文字の場合' => [
                [
                    'name' => '',
                    'description' => '',
                ],
                /* 期待値 */
            ],
            '商品名が10文字かつ商品説明が0文字の場合' => [
                [
                    'name' => '',
                    'description' => '',
                ],
                /* 期待値 */
            ],
            '商品名が0文字かつ商品説明が50文字の場合' => [
                [
                    'name' => '',
                    'description' => '',
                ],
                /* 期待値 */
            ],
            '商品名が10文字かつ商品説明が51文字の場合' => [
                [
                    'name' => '',
                    'description' => '',
                ],
                /* 期待値 */
            ],
            '商品名が11文字かつ商品説明が50文字の場合' => [
                [
                    'name' => '',
                    'description' => '',
                ],
                /* 期待値 */
            ],
        ];
    }
}
