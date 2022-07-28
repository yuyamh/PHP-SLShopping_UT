<?php

namespace Tests\Unit\Item;

use App\Admin\Exceptions\NotFoundException;
use App\Models\Item;
use ItemsSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * 商品テスト
 *
 * コマンド実行する場合はプロジェクトのルートディレクトリ上で実行すること
 * $ ./vendor/bin/phpunit ./tests/Unit/Item/ItemTest.php
 */
class ItemTest extends TestCase
{

    use RefreshDatabase;

    // テスト対象
    private $target;

    public function setUp(): void
    {

    }

    /**
     * 概要 商品名の重複チェック
     * 条件 商品名が重複していない場合
     * 結果 trueを返すこと
     */
    public function test_商品名が重複していない場合trueを返すこと()
    {

    }

    /**
     * 概要 商品名の重複チェック
     * 条件 商品名が重複していない場合
     * 結果 falseを返すこと
     */
    public function test_商品名が重複する場合falseを返すこと()
    {

    }

    /**
     * 概要 商品情報の取得
     * 条件 指定した商品IDに対応する商品情報が存在しない場合
     * 結果 例外が発生すること
     */
    public function test_商品情報が存在しない場合例外が発生すること()
    {

    }

    /**
     * 商品情報の取得処理の検証
     * 条件 テストデータのID1の商品情報を作成
     * 結果 取得結果が作成した商品情報と等しいこと
     */
    public function test_商品情報の取得処理の検証()
    {

    }
}
