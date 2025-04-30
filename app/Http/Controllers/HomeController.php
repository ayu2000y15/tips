<?php

namespace App\Http\Controllers;

use App\Models\ContentData;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\HpText;
use App\Services\ContentMasterService;
use App\Services\ContentDataService;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $contentMaster;
    protected $contentData;

    public function __construct(ContentMasterService $contentMaster, ContentDataService $contentData)
    {
        $this->contentMaster = $contentMaster;
        $this->contentData = $contentData;
    }
    public function index()
    {
        $hp = Image::where('view_flg', 'HP_000')->first();

        $menuAbout = Image::where('view_flg', 'HP_002')->first();
        $menuMessage = Image::where('view_flg', 'HP_003')->first();
        $menuPhilosophy = Image::where('view_flg', 'HP_004')->first();
        $menuCompany = Image::where('view_flg', 'HP_005')->first();

        $logo = Image::where('view_flg', 'HP_101')->first();
        $allright = Image::where('view_flg', 'HP_102')->first();
        $businessHour = Image::where('view_flg', 'HP_103')->first();

        $contactBtn1 = Image::where('view_flg', 'HP_201')->first();
        $contactBtn2 = Image::where('view_flg', 'HP_202')->first();
        $mailBtn = Image::where('view_flg', 'HP_203')->first();
        $telBtn = Image::where('view_flg', 'HP_204')->first();

        $topBack = Image::where('view_flg', 'HP_301')->first();
        $philosophyBack = Image::where('view_flg', 'HP_302')->first();

        $aboutLogo = Image::where('view_flg', 'HP_401')->first();
        $aboutIcon1 = Image::where('view_flg', 'HP_402')->first();
        $aboutIcon2 = Image::where('view_flg', 'HP_403')->first();
        $aboutIcon3 = Image::where('view_flg', 'HP_404')->first();
        $aboutHouse = Image::where('view_flg', 'HP_405')->first();
        $messageIcon = Image::where('view_flg', 'HP_406')->first();
        $companyLogo = Image::where('view_flg', 'HP_407')->first();
        $companyTree1 = Image::where('view_flg', 'HP_408')->first();
        $companyTree2 = Image::where('view_flg', 'HP_409')->first();

        $TopText = HpText::where('hp_text_id', 'TOP')->first();
        $AboutTITLE = HpText::where('hp_text_id', 'AboutTITLE')->first();
        $AboutCONTENT = HpText::where('hp_text_id', 'AboutCONTENT')->first();
        $AboutTitle1 = HpText::where('hp_text_id', 'AboutTitle1')->first();
        $AboutTitle2 = HpText::where('hp_text_id', 'AboutTitle2')->first();
        $AboutTitle3 = HpText::where('hp_text_id', 'AboutTitle3')->first();
        $AboutContent1 = HpText::where('hp_text_id', 'AboutContent1')->first();
        $AboutContent2 = HpText::where('hp_text_id', 'AboutContent2')->first();
        $AboutContent3 = HpText::where('hp_text_id', 'AboutContent3')->first();
        $AboutUnder = HpText::where('hp_text_id', 'AboutUnder')->first();
        $MessageText = HpText::where('hp_text_id', 'Message')->first();

        $options = [
            ['priority', true],
            ['id', true]
        ];
        $textCompany = $this->contentData->getContentWithSchema('T001');

        return view('home', compact(
            'hp',
            'menuAbout',
            'menuMessage',
            'menuPhilosophy',
            'menuCompany',
            'logo',
            'allright',
            'businessHour',
            'contactBtn1',
            'contactBtn2',
            'mailBtn',
            'telBtn',
            'topBack',
            'philosophyBack',
            'aboutLogo',
            'aboutIcon1',
            'aboutIcon2',
            'aboutIcon3',
            'aboutHouse',
            'messageIcon',
            'companyLogo',
            'companyTree1',
            'companyTree2',
            'TopText',
            'AboutTITLE',
            'AboutCONTENT',
            'AboutTitle1',
            'AboutTitle2',
            'AboutTitle3',
            'AboutContent1',
            'AboutContent2',
            'AboutContent3',
            'AboutUnder',
            'MessageText',
            'textCompany'
        ));
    }
    // public function index()
    // {
    //     $logoImg1 = Image::where('view_flg', 'HP_101')->first();
    //     $logoImg2 = Image::where('view_flg', 'HP_102')->first();

    //     $banner = Image::where('view_flg', 'HP_001')->first();

    //     $titleAbout = Image::where('view_flg', 'HP_002')->first();
    //     $titleMessage = Image::where('view_flg', 'HP_003')->first();
    //     $titleCompany = Image::where('view_flg', 'HP_004')->first();
    //     $titlePhilosophy = Image::where('view_flg', 'HP_005')->first();
    //     $titleContact = Image::where('view_flg', 'HP_006')->first();

    //     $textTop = HpText::where('hp_text_id', 'TOP')->first();
    //     $textAbout = HpText::where('hp_text_id', 'ABOUT')->first();
    //     $textMessage = HpText::where('hp_text_id', 'MESSAGE')->first();
    //     $textPhilosophy = HpText::where('hp_text_id', 'PHILOSOPHY')->first();

    //     $options = [
    //         ['priority', true],
    //         ['id', true]
    //     ];
    //     $textCompany = $this->contentData->getContentWithSchema('T001');

    //     $textContact = $this->contentData->getContentWithSchema('T002');

    //     return view('home', compact(
    //         'logoImg1',
    //         'logoImg2',
    //         'banner',
    //         'titleAbout',
    //         'titleMessage',
    //         'titleCompany',
    //         'titleContact',
    //         'titlePhilosophy',
    //         'titleContact',
    //         'textTop',
    //         'textAbout',
    //         'textMessage',
    //         'textPhilosophy',
    //         'textCompany',
    //         'textContact',
    //     ));
    // }
}
