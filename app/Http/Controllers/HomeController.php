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
        $logoImg1 = Image::where('view_flg', 'HP_101')->first();
        $logoImg2 = Image::where('view_flg', 'HP_102')->first();

        $banner = Image::where('view_flg', 'HP_001')->first();

        $titleAbout = Image::where('view_flg', 'HP_002')->first();
        $titleMessage = Image::where('view_flg', 'HP_003')->first();
        $titleCompany = Image::where('view_flg', 'HP_004')->first();
        $titlePhilosophy = Image::where('view_flg', 'HP_005')->first();
        $titleContact = Image::where('view_flg', 'HP_006')->first();

        $textTop = HpText::where('hp_text_id', 'TOP')->first();
        $textAbout = HpText::where('hp_text_id', 'ABOUT')->first();
        $textMessage = HpText::where('hp_text_id', 'MESSAGE')->first();
        $textPhilosophy = HpText::where('hp_text_id', 'PHILOSOPHY')->first();

        $options = [
            ['priority', true],
            ['id', true]
        ];
        $textCompany = $this->contentData->getContentWithSchema('T001');

        $textContact = $this->contentData->getContentWithSchema('T002');

        return view('home', compact(
            'logoImg1',
            'logoImg2',
            'banner',
            'titleAbout',
            'titleMessage',
            'titleCompany',
            'titleContact',
            'titlePhilosophy',
            'titleContact',
            'textTop',
            'textAbout',
            'textMessage',
            'textPhilosophy',
            'textCompany',
            'textContact',
        ));
    }
}
