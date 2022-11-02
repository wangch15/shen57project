@extends('backstage.template')

@section('title')
主要消息-管理列表
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/backstage/main-news-list.css')}}">
@endsection

@section('main')
    <main class="news-list">
        <div class="title">
            主要消息 / 管理消息
        </div>

        <!-- 套版用start -->
        @foreach ($newslist as $item)

        <section class="main-news-list">
            <div class="main-news-box">
                <img src="{{$item->img_path}}" alt="">
                <div class="info-box">
                    <div class="title">
                        <h5>{{$item->title}}</h5><span>{{$item->date}}</span>
                    </div>
                    <div class="content">
                        <p class="content-title">首頁內文</p>
                        {{$item->content}}
                    </div>
                    <div class="content">
                        <p class="content-title">內容頁內文</p>
                        {{$item->content2}}
                    </div>
                </div>
            </div>

            <div class="btnArea">
                <a href="/admin/main-edit/{{$item->id}}" class="editBtn">編輯</a>
                <button type="button" class="deleteBtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$item->id}}">
                刪除</button>

                <div class="modal fade" id="staticBackdrop{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-6 fw-bold" id="staticBackdropLabel">{{$item->title}}</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          請問確定要刪除這則消息嗎？(確認刪除後將無法回復)
                        </div>
                        <div class="modal-footer">
                          <a  href="/admin/main-del/{{$item->id}}" class="deleteBtn">確定刪除</a>
                          <button type="button" class="cancelBtn" data-bs-dismiss="modal">取消</button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

        </section>

        @endforeach
        <!-- 套版用end -->

    </main>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection
