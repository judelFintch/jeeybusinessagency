<?php
declare(strict_types=1);

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repository\Backend\ArticleRepository;
use App\Repository\Backend\GalleryRepository;
use App\Repository\Backend\ValveRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeFrontendController extends Controller
{
    public function __construct(
        public ArticleRepository $repository,
        public ValveRepository $valveRepository,
        public GalleryRepository $galleryRepository
    ){}

    public function index(): Factory|View|Application
    {
        return view('frontend.home', [
            'articles' => $this->repository->getAllVerified(),
            'valves' => $this->valveRepository->getAllVerified(),
            'galleries' => $this->galleryRepository->getAllVerified()
        ]);
    }

    public function show(string $key): Factory|View|Application
    {
        return view('frontend.articles.show', [
            'article' => $this->repository->getOneByKey($key),
            'valves' => $this->valveRepository->getAllVerified()
        ]);
    }

    public function all_articles()
    {
        return view('frontend.articles.all_article', [
            'article' => 1
        ]);
    }

    public function about()
    {
        return view('frontend.about_us', [
            'article' => 1
        ]);
    }

    public function bloc_un()
    {
        return view('frontend.bloc_un', [
            'article' => 1
        ]);
    }

    public function bloc_deux()
    {
        return view('frontend.bloc_deux', [
            'article' => 1
        ]);
    }

    public function visionnaire()
    {
        return view('frontend.visionnaire', [
            'article' => 1
        ]);
    }

    public function gallery():Factory|View|Application
    {
        return view('frontend.gallery', [
            'articles' => $this->repository->getAllVerified(),
            'valves' => $this->valveRepository->getAllVerified()
        ]);
    }


    public function actu():Factory|View|Application
    {
        return view('frontend.actualites', [
            'articles' => $this->repository->getAllVerified(),
            'valves' => $this->valveRepository->getAllVerified(),
            
        ]);
    }

   

    public function contact()
    {
        return view('frontend.contact', [
            'article' => 1
        ]);
    }


    public function under()
    {
        return view('frontend.underconstruct', [
            'article' => 1
        ]);
    }
}
