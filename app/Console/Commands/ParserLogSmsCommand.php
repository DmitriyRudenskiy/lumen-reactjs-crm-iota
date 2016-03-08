<?php
namespace App\Console\Commands;


use App\Component\Sms;
use App\Models\Notification\AnswerSend;
use App\Models\Notification\Phone;
use App\Models\Product\Answer;
use Illuminate\Console\Command;

class ParserLogSmsCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'sms:parser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parser history fo site sms4b';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        /*
        $filename = realpath(__DIR__ . '/../../../var/sms') . '/02_03_2016.csv';

        if (!is_readable($filename)) {
            throw new \RuntimeException();
        }

        $file = new \SplFileObject($filename);
        $file->setFlags(\SplFileObject::READ_CSV);

        foreach ($file as $value) {
            if (!empty($value[10]) && strpos($value[10], 'club')) {
                $number = (int)substr($value[1], -10);
                $answerId = (int)explode('/club', $value[10])[1];

                $phone = Phone::get($number);
                AnswerSend::add($phone->id, $answerId, 'from history', 1);
            }
        }
        */

        /*
        $list = Answer::whereBetween('id', [107, 121])
            ->get();

        foreach ($list as $value) {
            $this->addQueueSms($value);
        }
        */

/*
        $filename = realpath(__DIR__ . '/../../../var/sms') . '/import_2016_03_02.txt';
        $tmp = explode("\n", file_get_contents($filename));

        $result = [];

        foreach ($tmp as $value) {
            if (strpos($value, '/pro')) {
                $result[]= (int)explode('/pro', $value)[1];
            }
        }

        var_dump(implode(',', $result));
*/

        $list = array(
            array('id' => '142','phone' => '9272411043'),
            array('id' => '147','phone' => '9510361289'),
            array('id' => '148','phone' => '9130907181'),
            array('id' => '150','phone' => '9035737960'),
            array('id' => '151','phone' => '9024737593'),
            array('id' => '152','phone' => '9254880111'),
            array('id' => '153','phone' => '9609617055'),
            array('id' => '154','phone' => '9858603945'),
            array('id' => '155','phone' => '9062695776'),
            array('id' => '156','phone' => '9511807690'),
            array('id' => '157','phone' => '9033001478'),
            array('id' => '160','phone' => '9525027473'),
            array('id' => '161','phone' => '7905342689'),
            array('id' => '162','phone' => '9037816435'),
            array('id' => '163','phone' => '9045715080'),
            array('id' => '165','phone' => '9192806949'),
            array('id' => '166','phone' => '9203680941'),
            array('id' => '167','phone' => '9113455385'),
            array('id' => '168','phone' => '9609753806'),
            array('id' => '169','phone' => '9533003024'),
            array('id' => '170','phone' => '9128990541'),
            array('id' => '171','phone' => '9128990541'),
            array('id' => '172','phone' => '9509959951'),
            array('id' => '173','phone' => '9229039085'),
            array('id' => '174','phone' => '9120899941'),
            array('id' => '175','phone' => '9160696341'),
            array('id' => '176','phone' => '9160696341'),
            array('id' => '178','phone' => '9116509322'),
            array('id' => '179','phone' => '9094522195'),
            array('id' => '180','phone' => '9094522195'),
            array('id' => '181','phone' => '9224441218'),
            array('id' => '182','phone' => '9262645477'),
            array('id' => '183','phone' => '9139646890'),
            array('id' => '184','phone' => '9234991702'),
            array('id' => '185','phone' => '9234991702'),
            array('id' => '186','phone' => '9047808919'),
            array('id' => '188','phone' => '9333397929'),
            array('id' => '190','phone' => '9030693776'),
            array('id' => '191','phone' => '9045813977'),
            array('id' => '192','phone' => '9225400444'),
            array('id' => '193','phone' => '9503046720'),
            array('id' => '194','phone' => '9197398875'),
            array('id' => '195','phone' => '9128936396'),
            array('id' => '196','phone' => '9254080007'),
            array('id' => '197','phone' => '9255206029'),
            array('id' => '198','phone' => '9824954223'),
            array('id' => '199','phone' => '9251860042'),
            array('id' => '200','phone' => '9147621211'),
            array('id' => '201','phone' => '9147621211'),
            array('id' => '202','phone' => '9253332400'),
            array('id' => '203','phone' => '9159828352'),
            array('id' => '204','phone' => '9647862547'),
            array('id' => '205','phone' => '9640368546'),
            array('id' => '206','phone' => '9122450280'),
            array('id' => '207','phone' => '9122450280'),
            array('id' => '208','phone' => '9224009028'),
            array('id' => '209','phone' => '9616730800'),
            array('id' => '210','phone' => '9224009028'),
            array('id' => '211','phone' => '9535356896'),
            array('id' => '213','phone' => '9224009028'),
            array('id' => '214','phone' => '9195632623'),
            array('id' => '215','phone' => '9224009028'),
            array('id' => '216','phone' => '9224009028'),
            array('id' => '217','phone' => '9163114826'),
            array('id' => '218','phone' => '9224009028'),
            array('id' => '219','phone' => '9142793069'),
            array('id' => '220','phone' => '9224009028'),
            array('id' => '221','phone' => '9224009028'),
            array('id' => '222','phone' => '9259291969'),
            array('id' => '223','phone' => '9132639299'),
            array('id' => '224','phone' => '9224009028'),
            array('id' => '225','phone' => '9144779531'),
            array('id' => '226','phone' => '9147953831'),
            array('id' => '227','phone' => '9853816764'),
            array('id' => '228','phone' => '9055879451'),
            array('id' => '229','phone' => '9189410981'),
            array('id' => '231','phone' => '9190309633'),
            array('id' => '232','phone' => '9114248858'),
            array('id' => '233','phone' => '9615328523'),
            array('id' => '234','phone' => '9270055020'),
            array('id' => '235','phone' => '9284264409'),
            array('id' => '236','phone' => '9176986340'),
            array('id' => '237','phone' => '9134673320'),
            array('id' => '238','phone' => '9806957615'),
            array('id' => '239','phone' => '9234178995'),
            array('id' => '240','phone' => '9049794225'),
            array('id' => '241','phone' => '9049941331'),
            array('id' => '242','phone' => '9117953237'),
            array('id' => '243','phone' => '9083057595'),
            array('id' => '244','phone' => '9043712117'),
            array('id' => '245','phone' => '9043712117'),
            array('id' => '246','phone' => '9521669900'),
            array('id' => '247','phone' => '9517876077'),
            array('id' => '248','phone' => '9517876077'),
            array('id' => '249','phone' => '9517876077'),
            array('id' => '250','phone' => '9068454087'),
            array('id' => '251','phone' => '9639887007'),
            array('id' => '252','phone' => '9114514433'),
            array('id' => '253','phone' => '9114514433'),
            array('id' => '254','phone' => '9114514433'),
            array('id' => '255','phone' => '9887546276'),
            array('id' => '256','phone' => '9689899568'),
            array('id' => '257','phone' => '9184055036'),
            array('id' => '258','phone' => '9184055036'),
            array('id' => '259','phone' => '9502505811'),
            array('id' => '260','phone' => '9502505811'),
            array('id' => '261','phone' => '9282799423'),
            array('id' => '262','phone' => '9282799423'),
            array('id' => '263','phone' => '9522047958'),
            array('id' => '264','phone' => '9522047958'),
            array('id' => '265','phone' => '9788827391'),
            array('id' => '266','phone' => '9187460873'),
            array('id' => '267','phone' => '9204786464'),
            array('id' => '268','phone' => '9526446545'),
            array('id' => '269','phone' => '9109002134'),
            array('id' => '270','phone' => '9120890781'),
            array('id' => '271','phone' => '9803014431'),
            array('id' => '272','phone' => '9250508940'),
            array('id' => '273','phone' => '9260735633'),
            array('id' => '274','phone' => '9192536441'),
            array('id' => '275','phone' => '9674331587'),
            array('id' => '276','phone' => '9265279069'),
            array('id' => '277','phone' => '9625264339'),
            array('id' => '278','phone' => '9625264339'),
            array('id' => '279','phone' => '9605206961'),
            array('id' => '280','phone' => '9605206961'),
            array('id' => '281','phone' => '9880802971'),
            array('id' => '282','phone' => '9880802971'),
            array('id' => '283','phone' => '9161410463'),
            array('id' => '284','phone' => '9086158983'),
            array('id' => '285','phone' => '9086158983'),
            array('id' => '286','phone' => '9086158983'),
            array('id' => '287','phone' => '9292614633'),
            array('id' => '288','phone' => '9080536396'),
            array('id' => '289','phone' => '9080536396'),
            array('id' => '290','phone' => '9298433303'),
            array('id' => '291','phone' => '9298433303'),
            array('id' => '292','phone' => '9298433303'),
            array('id' => '293','phone' => '9298433303'),
            array('id' => '294','phone' => '9057797177'),
            array('id' => '295','phone' => '9057797177'),
            array('id' => '296','phone' => '9135887351'),
            array('id' => '297','phone' => '9646664661'),
            array('id' => '298','phone' => '9192320303'),
            array('id' => '299','phone' => '9192320303'),
            array('id' => '300','phone' => '9192320303'),
            array('id' => '301','phone' => '9289561331'),
            array('id' => '302','phone' => '9889177676'),
            array('id' => '303','phone' => '9995401744'),
            array('id' => '304','phone' => '9204755487'),
            array('id' => '305','phone' => '9139120409'),
            array('id' => '306','phone' => '9529614323'),
            array('id' => '307','phone' => '9529614323'),
            array('id' => '308','phone' => '9529614323'),
            array('id' => '309','phone' => '9108734426'),
            array('id' => '310','phone' => '9205010604'),
            array('id' => '311','phone' => '9180932111'),
            array('id' => '312','phone' => '9185131377'),
            array('id' => '313','phone' => '9135887351')
        );

        foreach ($list as $value) {
            $this->importSms($value['id'], $value['phone']);
        }
    }

    protected function addQueueSms(Answer $answer)
    {
        if (empty($answer->order->phone)) {
            return;
        }

        $message = sprintf("Запчасть найдена и проверена http://autodeviz.ru/club%d 88005556583", $answer->id);
        $number = (int)substr(preg_replace('/[^0-9]/', '', $answer->order->phone), -10);
        $phone = Phone::get($number);

        AnswerSend::add($phone->id, $answer->id, $message);
    }

    public function importSms($id, $number)
    {
        if ($id < 239) {
            return;
        }

        $message = sprintf("Запчасть найдена и проверена http://autodeviz.ru/pro%d 88005556583", $id);

        $number = (int)substr(preg_replace('/[^0-9]/', '', $number), -10);

        echo $id . "\n";
        echo (new Sms())->send($number, $message) . "\n";
        sleep(1);
    }
}