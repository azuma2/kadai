<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'fname' => '足立',
            'name' => '満',
            'gender'=>'男性',
            'email'=>'aiai@mail.com',
            'postcode'=>'14-3543',
            'address'=>'足立区',
            'building_name'=>'メゾン石原',
            'opinion'=>'いつもお世話になっております。先日、貴社製品を購入させていただきました。この度、不具合が生じ、説明書に沿って操作を進めていましたが上手く行きませんでした。どのように直せば良いかご教授いただきたいです。'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '品川',
            'name' => '総司',
            'gender'=>'男性',
            'email'=>'yho@mail.com',
            'postcode'=>'19-8888',
            'address'=>'品川区',
            'building_name'=>'トランプタワー',
            'opinion'=>'２つ目にして思いつきません'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '北',
            'name' => '多久雄',
            'gender'=>'男性',
            'email'=>'okoi@mail.com',
            'postcode'=>'82-0008',
            'address'=>'北区',
            'building_name'=>'スーパー三井',
            'opinion'=>'最近物騒になっってきました'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '港',
            'name' => '例子',
            'gender'=>'女性',
            'email'=>'yuyu@mail.com',
            'postcode'=>'763-4444',
            'address'=>'港区',
            'building_name'=>'下高井戸駅',
            'opinion'=>'計画停電に入っていません'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '葛飾',
            'name' => '勘吉',
            'gender'=>'女性',
            'email'=>'kotikame@mail.com',
            'postcode'=>'87986-1',
            'address'=>'葛飾区',
            'building_name'=>'ごみ焼却場',
            'opinion'=>'両津しか思い浮かばない'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '新宿',
            'name' => '小百合',
            'gender'=>'女性',
            'email'=>'hasaha@mail.com',
            'postcode'=>'67-9932',
            'address'=>'新宿区',
            'building_name'=>'都庁',
            'opinion'=>'３密は流行語大賞
            '
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '渋谷',
            'name' => '栄一',
            'gender'=>'男性',
            'email'=>'kane@mail.com',
            'postcode'=>'234-4324',
            'address'=>'蜂項前',
            'building_name'=>'造幣局',
            'opinion'=>'裏側はゴミだらけ'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '中野',
            'name' => '吉郎',
            'gender'=>'男性',
            'email'=>'kane3@mail.com',
            'postcode'=>'',
            'address'=>'中野区',
            'building_name'=>'サンプラザ',
            'opinion'=>'司会がうまい割にいい仕事もらえない'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '荒川',
            'name' => 'ヨネ',
            'gender'=>'女性',
            'email'=>'wer@mail.com',
            'postcode'=>'72-9981',
            'address'=>'荒川区',
            'building_name'=>'熊本中央シアター',
            'opinion'=>'ばってん荒川'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '板橋',
            'name' => 'くにお',
            'gender'=>'男性',
            'email'=>'ui@mail.com',
            'postcode'=>'876-8888',
            'address'=>'板橋区',
            'building_name'=>'板橋下水処理場',
            'opinion'=>'マッハキックの使い手'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '墨田',
            'name' => '貫太郎',
            'gender'=>'男性',
            'email'=>'fwf@mail.com',
            'postcode'=>'786-42836',
            'address'=>'墨田区',
            'building_name'=>'隅田川',
            'opinion'=>'サナダムシ館言ってみたいです'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '台東',
            'name' => 'よしみ',
            'gender'=>'女性',
            'email'=>'tgt@mail.com',
            'postcode'=>'746-4784',
            'address'=>'台東区',
            'building_name'=>'下水処理場',
            'opinion'=>'一番何も思い浮かばない区'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '世田谷',
            'name' => 'サザエ',
            'gender'=>'女性',
            'email'=>'fqrfa@mail.com',
            'postcode'=>'',
            'address'=>'世田谷区',
            'building_name'=>'磯野家',
            'opinion'=>'うざいほど流れる世田谷育ちの健康食品のCM'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '千代田',
            'name' => '島倉',
            'gender'=>'女性',
            'email'=>'tyu@mail.com',
            'postcode'=>'3786-2364',
            'address'=>'千代田区',
            'building_name'=>'アパート吉田',
            'opinion'=>'何も思い浮かばなかった'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '大田',
            'name' => '道灌',
            'gender'=>'男性',
            'email'=>'frfaer@mail.com',
            'postcode'=>'4546-11111',
            'address'=>'大田区',
            'building_name'=>'江戸城',
            'opinion'=>'戦国大名やってます'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '中央',
            'name' => '弁蔵',
            'gender'=>'男性',
            'email'=>'rere@mail.com',
            'postcode'=>'45-1111111',
            'address'=>'中央区',
            'building_name'=>'中央大学',
            'opinion'=>'高尾大学は中央大学のことではないでしょうか'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '文教',
            'name' => '智恵',
            'gender'=>'女性',
            'email'=>'rergear@mail.com',
            'postcode'=>'1123-546',
            'address'=>'文京区',
            'building_name'=>'どこかの大学',
            'opinion'=>'大学の聖地'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '杉並',
            'name' => '悟',
            'gender'=>'男性',
            'email'=>'fefere@mail.com',
            'postcode'=>'631-9999',
            'address'=>'杉並区',
            'building_name'=>'永福のラーメン屋',
            'opinion'=>'理想の住宅街'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '江戸川',
            'name' => '新一',
            'gender'=>'男性',
            'email'=>'tkt@mail.com',
            'postcode'=>'37-5366',
            'address'=>'江戸川区',
            'building_name'=>'毛利探偵事務所',
            'opinion'=>'なにげに広い'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '練馬',
            'name' => 'のび太',
            'gender'=>'男性',
            'email'=>'vgrevwerv@mail.com',
            'postcode'=>'34-42414',
            'address'=>'練馬区',
            'building_name'=>'剛田雑貨',
            'opinion'=>'なにやら深い事情があるらしい'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '豊島',
            'name' => '政治',
            'gender'=>'男性',
            'email'=>'etr@mail.com',
            'postcode'=>'3767-3413987',
            'address'=>'豊島区',
            'building_name'=>'マンション豪三郎',
            'opinion'=>'このあたりからパッと思い出せなくなる'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '江東',
            'name' => '正樹',
            'gender'=>'男性',
            'email'=>'432@mail.com',
            'postcode'=>'242-56445',
            'address'=>'江東区',
            'building_name'=>'公園のトイレ',
            'opinion'=>'多分これで２３区は全部'
        ];
        DB::table('todos')->insert($param);

        $param = [
            'fname' => '目黒',
            'name' => '警部',
            'gender'=>'男性',
            'email'=>'43542@mail.com',
            'postcode'=>'2423-564435',
            'address'=>'目黒区',
            'building_name'=>'警視庁',
            'opinion'=>'忘れてた'
        ];
        DB::table('todos')->insert($param);

    }











}
