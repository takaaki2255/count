<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CountController extends Controller
{
    public function index(Request $request)
    {
        
        $age = (int)$request->input('age');
        $gender = $request->input('gender');
        $height = (int)$request->input('height');
        $weight = (int)$request->input('weight');
        
         $body = 0;
     
        
        if($gender == 'man') {
            $body = 10 * $weight + 6.25 * $height - 5 * $age + 5;
        } elseif ($gender == 'woman') {
            $body = 10 * $weight + 6.25 * $height - 5 * $age - 161;
        } else {
             $body = 0;
        }
        
        
        $cooks = [
            'cook1'=> [
                'rice small' => [
                    'name' => 'ご飯 小盛り',
                    'kcal' => 168,
                ],
                'rice' => [
                    'name' => 'ご飯',
                    'kcal' => 235,
                ],
                'rice big' => [
                    'name' => 'ご飯 大盛り',
                    'kcal' => 403,
                ],
                 'curry' => [
                     'name' => 'カレー',
                     'kcal' => 100,
                ],
                'rice ball' => [
                    'name' =>'おにぎり',
                    'kcal' => 210,
                ],
                'french_bread' =>[ 
                    'name' =>'フランスパン',
                    'kcal' => 278,
                ],
                 'ramen' => [
                     'name' => 'ラーメン',
                     'kcal' => 450,
                ],
                'udon' => [
                     'name' => 'うどん',
                     'kcal' => 350,
                ],
                'soba' => [
                     'name' => 'そば',
                     'kcal' => 325,
                ],
                'pasta' => [
                     'name' => 'パスタ',
                     'kcal' => 373,
                ],
                'fried_rice' => [
                     'name' => 'チャーハン',
                     'kcal' => 708,
                ],
                'omelette rice' => [
                     'name' => 'オムライス',
                     'kcal' => 860,
                ],
                'Omelette rice' => [
                     'name' => 'カツ丼',
                     'kcal' => 1020,
                ],
                 'beef bowl' => [
                     'name' => '牛丼',
                     'kcal' => 771,
                ],
                 'curry' => [
                     'name' => 'カレー',
                     'kcal' => 859,
                ],
                 'karubonara' => [
                     'name' => 'カルボナーラ',
                     'kcal' => 779,
                ],
                 'neapolitan' => [
                     'name' => 'ナポリタン',
                     'kcal' => 614,
                ],
                'okonomiyaki' => [
                     'name' => 'お好み焼き',
                     'kcal' => 545,
                ],
            ],
            'cook2' => [
                'steak' => [
                     'name' => 'ステーキ',
                     'kcal' => 500,
                ],
                'roast_beef' => [
                     'name' => 'ローストビーフ',
                     'kcal' => 78,
                ],
                'beef_stew' => [
                     'name' => 'ビーフシチュー',
                     'kcal' => 535,
                ],
                'hamburg' => [
                     'name' => 'ハンバーグ',
                     'kcal' => 223,
                ],
                'green_pepper_thread' => [
                     'name' => '青椒肉絲',
                     'kcal' => 163,
                ],
                'pork_saut' => [
                     'name' => 'ポークソテー',
                     'kcal' => 259,
                ],
                'grilled_ginge' => [
                     'name' => '生姜焼き',
                     'kcal' => 374,
                ],
                'pork_cute' => [
                     'name' => 'とんかつ',
                     'kcal' => 463,
                ],
                'sweet_and_sour_pork' => [
                     'name' => '酢豚',
                     'kcal' => 242,
                ],
                'double_pot_meat' => [
                     'name' => '回鍋肉',
                     'kcal' => 388,
                ],
                'chiken_saute' => [
                     'name' => 'チキンソテー',
                     'kcal' => 212,
                ],
                'karaage' => [
                     'name' => '唐揚げ',
                     'kcal' => 237,
                ],
                'fried_chiken' => [
                     'name' => 'K◯Cチキン',
                     'kcal' => 218,
                ],
                'teriyaki_chiken' => [
                     'name' => '照り焼きチキン',
                     'kcal' => 309,
                ],
                'boiled_tomato' => [
                     'name' => 'チキンのトマト煮',
                     'kcal' => 494,
                ],
                'oil_chiken' => [
                     'name' => '油淋鶏',
                     'kcal' => 423,
                ],
                'sashimi' => [
                     'name' => '刺身',
                     'kcal' => 120,
                ],
                'fish_saute' => [
                     'name' => '魚の塩焼き',
                     'kcal' => 171,
                ],
                'fish_fry' => [
                     'name' => '白身魚フライ',
                     'kcal' => 148,
                ],
                'deep_fried_tatsuta' => [
                     'name' => '魚の竜田揚げ',
                     'kcal' => 102,
                ],
                'grilled_eel' => [
                     'name' => '鰻の蒲焼',
                     'kcal' => 440,
                ],
                'aqua_pazza' => [
                     'name' => 'アクアパッツァ',
                     'kcal' => 117,
                ],
                'fried_shrimp' => [
                     'name' => 'エビフライ',
                     'kcal' => 139,
                ],
                'boiled_fish_in_miso' => [
                     'name' => '鯖の味噌煮',
                     'kcal' => 230,
                ],
                'fish_teriyaki' => [
                     'name' => '鰤の照り焼き',
                     'kcal' => 314,
                ],
                'shrimp_chill' => [
                     'name' => 'エビチリ',
                     'kcal' => 212,
                ],
                'stew' => [
                     'name' => 'シチュー',
                     'kcal' => 275,
                ],
                'croquette' => [
                     'name' => 'コロッケ',
                     'kcal' => 164,
                ],
                '"meet_and_potatoes' => [
                     'name' => '肉じゃが',
                     'kcal' => 330,
                ],
                'mabo_tofu' => [
                     'name' => '麻婆豆腐',
                     'kcal' => 171,
                ],
            ],
            'cook3' => [
                 'french fries' => [
                     'name' => 'フライドポテト',
                     'kcal' => 320,
                ],
                'natto' => [
                     'name' => '納豆',
                     'kcal' => 97,
                ],
                'tofu' => [
                     'name' => '豆腐',
                     'kcal' => 150,
                ],
                'egg' => [
                     'name' => '卵',
                     'kcal' => 91,
                ],
                'fried egg' => [
                     'name' => '卵焼き',
                     'kcal' => 120,
                ],
                'mentaiko' => [
                     'name' => '明太子',
                     'kcal' => 30,
                ],
                'kimchi' => [
                     'name' => 'キムチ',
                     'kcal' => 60,
                ],
                'salad' => [
                     'name' => 'サラダ',
                     'kcal' => 20,
                ],
                'cabbage' => [
                     'name' => 'キャベツ',
                     'kcal' => 23,
                ],
                'cucumber' => [
                     'name' => 'キュウリ',
                     'kcal' => 14,
                ],
                'tomato' => [
                     'name' => 'トマト',
                     'kcal' => 19,
                ],
                'onion' => [
                     'name' => 'タマネギ',
                     'kcal' => 37,
                ],
                'potato' => [
                     'name' => 'ジャガイモ',
                     'kcal' => 76,
                ],
                'rettuce' => [
                     'name' => 'レタス',
                     'kcal' => 12,
                ],
                'broccoli' => [
                     'name' => 'ブロッコリー',
                     'kcal' => 33,
                ],
                'miso_soup' => [
                     'name' => '味噌汁',
                     'kcal' =>58,
                ],
                'miso_soup_with_pork' => [
                     'name' => '豚汁',
                     'kcal' => 121,
                ],
                'corn_soup' => [
                     'name' => 'コーンスープ',
                     'kcal' => 64,
                ],
            ],
            'cook4' => [
                'strawberry' => [
                     'name' => 'イチゴ',
                     'kcal' => 21,
                ],
                'apple' => [
                     'name' => 'リンゴ',
                     'kcal' => 70,
                ],
                'apple' => [
                     'name' => 'メロン',
                     'kcal' => 53,
                ],
                'orange' => [
                     'name' => 'オレンジ',
                     'kcal' => 34,
                ],
                'banana' => [
                     'name' => 'バナナ',
                     'kcal' => 77,
                ],
                'kiwi' => [
                     'name' => 'キウイ',
                     'kcal' => 46,
                ],
                'cake' => [
                     'name' => 'ケーキ',
                     'kcal' => 368,
                ],
                'cream_puff' => [
                     'name' => 'シュークリーム',
                     'kcal' => 155,
                ],
                'dorayaki' => [
                     'name' => 'どら焼き',
                     'kcal' => 172,
                ],
                'apple pie' => [
                     'name' => 'アップルパイ',
                     'kcal' => 330,
                ],
                'pudding' => [
                     'name' => 'プリン',
                     'kcal' => 113,
                ],
                'fruit jelly' => [
                     'name' => 'フルーツゼリー',
                     'kcal' => 77,
                ],
                'chocolate' => [
                     'name' => 'チョコレート',
                     'kcal' => 279,
                ],
                'ice' => [
                     'name' => 'アイス',
                     'kcal' => 313,
                ],
                'cola' => [
                     'name' => 'コーラ',
                     'kcal' => 225,
                ],
                'tea' => [
                     'name' => 'お茶',
                     'kcal' => 10,
                ],
                'coffee' => [
                     'name' => 'コーヒー',
                     'kcal' => 4,
                ],
                'orange_juice' => [
                     'name' => 'オレンジジュース',
                     'kcal' => 169,
                ],
                'milk tea' => [
                     'name' => 'ミルクティー',
                     'kcal' => 169,
                ],
                'beer' => [
                     'name' => 'ビール',
                     'kcal' => 200,
                ],
                'wine' => [
                     'name' => 'ワイン',
                     'kcal' => 72,
                ],
            ],
        ];
        
        $requestAll = $request->all();
        
        $cook1 = $request->input('cook1');
        $cook2 = $request->input('cook2');
        $cook3 = $request->input('cook3');
        $cook4 = $request->input('cook4');
        
        $kcal = 0;
        
        foreach($cooks['cook1'] as $key => $food) {
            if (in_array($key, (array)$cook1, true)) {
                Log::debug(__LINE__ . ' ' . __METHOD__ . ' ' . print_r($food, true));
                $kcal += $food['kcal'];
            }
        } 
        
         foreach($cooks['cook2'] as $key => $food) {
            if (in_array($key, (array)$cook2, true)) {
                Log::debug(__LINE__ . ' ' . __METHOD__ . ' ' . print_r($food, true));
                $kcal += $food['kcal'];
            }
        } 
        
         foreach($cooks['cook3'] as $key => $food) {
            if (in_array($key, (array)$cook3, true)) {
                Log::debug(__LINE__ . ' ' . __METHOD__ . ' ' . print_r($food, true));
                $kcal += $food['kcal'];
            }
        } 
        
         foreach($cooks['cook4'] as $key => $food) {
            if (in_array($key, (array)$cook4, true)) {
                Log::debug(__LINE__ . ' ' . __METHOD__ . ' ' . print_r($food, true));
                $kcal += $food['kcal'];
            }
        } 
        
        $foods = 0 + $kcal;
        
        $view = $body - $foods;

        return view('count.index',['body' => $body, 
                                   'food' => $food,
                                   'foods' => $foods,
                                   'view' => $view,
                                   'age' => $age,
                                   'height' => $height,
                                   'weight' => $weight,
                                   'cooks' => $cooks,
                                   'cook1' => $cook1,
                                   'cook2' => $cook2,
                                   'cook3' => $cook3,
                                   'cook4' => $cook4,
                                   ]);
        
    }
}
