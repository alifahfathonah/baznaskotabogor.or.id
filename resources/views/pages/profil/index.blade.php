@extends('layouts.front')
@section('title')
    <title>{{$profil->title}} : Badan Amil Zakat (BAZNAS) Kota Bogor</title>
@endsection
@section('main')
    <section class="main">
            <div class="main_title simple_sections">
                <div class="main_name fadeInDown animated delay1">
                    <div class="container">
                        <div class="row">
                            @include('include.menu')
                        </div>
                    </div>
                </div>
            
                <div class="done_info sections fadeInUp animated delay2">
                    <div class="container">
                        <div class="row">
                            @include('include.head')
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
@section('content')
    <div class="container">

            <!--cbp tmtimeline-->
            <ul class="cbp_tmtimeline">
              <!--Education-->
              <li>
            @if ($profil->count()!=0)
                
                <div class="cbp_tmtime">
                    <span>Profil BAZNAS Kota Bogor</span>
                    <h2 style="">{{ucwords(str_replace('-',' ',$profil->title))}}</h2>
                  
                </div>

                <div class="cbp_tmicon fa fa-star"></div>

                <!--cbp tmlabel-->
                <div class="cbp_tmlabel">

                  <!--Item-->
                  <div class="row">
                    <div class="col-md-12 col-sm-12 isi">
                        {!!$profil->desc!!}
                    </div>
                  </div>
                  <!--Item-->

                  <div class="divisor_line"></div>

                 

                </div>
                <!--cbp tmlabel-->
            @else
                <div class="cbp_tmtime">
                    <h2>Nama Calon</h2>
                    <span>Biografi</span>
                  
                </div>

                <div class="cbp_tmicon fa fa-star"></div>

                <!--cbp tmlabel-->
                <div class="cbp_tmlabel">

                    <h2><i>Data Belum Tersedia</i></h2>    
                </div>
            @endif

              </li>
              <!--Education-->
             
              
            </ul>        
            <!--cbp tmtimeline-->

           </div>
        
@endsection
<style>
    .central_content iframe
    {
        height:350px !important;
    }
</style>