<?php

use App\Services\Usen\Order\CsvOrderRow;
use app\Services\Usen\Order\Wrappers\Payment;
use app\Services\Usen\Order\Wrappers\Product;
use app\Services\Usen\Order\Wrappers\SkipDecision;
use app\Services\Usen\Order\Wrappers\Slip;
use PHPUnit\Framework\TestCase;
use App\Exceptions\SkipImportException;

class CsvOrderRowTest extends TestCase
{
    /**
     * 正常なデータが渡された場合、各クラスのインスタンスが正しく生成されることを確認する
     */
    public function testValidDataCreatesInstances()
    {
$row = [
    '*',
    '001:ＢＥＮＣＩＡ',
    'No:202200100012153',
    '0',
    '',
    '',
    '2022/12/25',
    '2022',
    '12',
    '25',
    '日',
    '10:会計済',
    '2022/12/25 19:08:00',
    '2022/12/25 19:26:00',
    '1',
    '4:T.O、デリバリー',
    '000000014:TO1',
    '50:ディナー',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '3230',
    '2',
    '3230',
    '239',
    '0',
    '0',
    '2991',
    '239',
    '0',
    '0',
    '0',
    '0',
    '0:対象外',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '0',
    '3230',
    '0101:オーナー',
    '',
    '',
    '',
    '6:税率単位',
    '',
    '0',
    '',
    '1:成功',
    ' ',
    '1:成功',
    '2022/12/25 19:26',
    '1:成功',
    '2022/12/25 19:26',
    '',
    '',
    '',
    '2',
    'デリバリー',
    '金のお茶漬け',
    '',
    '',
    '',
    'Yes',
    '00000001967:金の鯛茶漬け',
    '白米x1 / 厳選カンパチ60gx1',
    '1:成功',
    '/',
    '1460',
    '00:内税',
    '269.6',
    '1190.4',
    '81.50%',
    '1',
    '0:設定なし',
    '',
    'PP0013:小山アガタ 琴美',
    '2022/12/25 19:15',
    '',
    ' ',
    '',
    '',
    '20:配膳済',
    '01:店内',
    '01:店内',
];



        $csvOrderRow = new CsvOrderRow($row);

        // 各クラスのインスタンスが生成されていることを確認
        // この部分は各ラッパークラスにgetterを追加してから実装
        $this->assertInstanceOf(Payment::class, $csvOrderRow->getPayment());
        $this->assertInstanceOf(Product::class, $csvOrderRow->getProduct());
        $this->assertInstanceOf(SkipDecision::class, $csvOrderRow->getSkipDecision());
        $this->assertInstanceOf(Slip::class, $csvOrderRow->getSlip());
    }

    /**
     * 無効なデータが渡された場合、SkipImportExceptionがスローされることを確認する
     */
    public function testInvalidDataThrowsSkipImportException()
    {
        $row = [
            '*',
            '001:ＢＥＮＣＩＡ',
            'No:202200100012153',
            '0',
            '',
            '',
            '2022/12/25',
            '2022',
            '12',
            '25',
            '日',
            '10:会計済',
            '2022/12/25 19:08',
            '2022/12/25 19:26',
            '1',
            '4:T.O、デリバリー',
            '000000014:TO1',
            '50:ディナー',
            '0',
            '0',
            '0',
            '0',
            '0',
            '0',
            '3230',
            '2',
            '3230',
            '239',
            '0',
            '0',
            '2991',
            '239',
            '0',
            '0',
            '0',
            '0',
            '0:対象外',
            '0',
            '0',
            '0',
            '0',
            '0',
            '0',
            '0',
            '0',
            '0',
            '0',
            '3230',
            '0101:オーナー',
            '',
            '',
            '',
            '6:税率単位',
            '',
            '0',
            '',
            '1:成功',
            ' ',
            '1:成功',
            '2022/12/25 19:26',
            '1:成功',
            '2022/12/25 19:26',
            '',
            '',
            '',
            '2',
            'デリバリー',
            '金のお茶漬け',
            '',
            '',
            '',
            'Yes',
            '00000001967:金の鯛茶漬け',
            '白米x1 / 厳選カンパチ60gx1',
            '1:成功',
            '/',
            '1460',
            '00:内税',
            '269.6',
            '1190.4',
            '81.50%',
            '1',
            '0:設定なし',
            '',
            'PP0013:小山アガタ 琴美',
            '2022/12/25 19:15',
            '',
            ' ',
            '',
            '',
            '20:配膳済',
            '01:店内',
            '01:店内',
        ];


        $this->expectException(SkipImportException::class);

        $csvOrderRow = new CsvOrderRow($row);
    }
}
