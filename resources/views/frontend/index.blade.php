@extends('layouts.app')


  
@section('content')
  <section class="w-full relative mainpatern bg-repeat mdmid:pb-10">
    <div class="relative">
      <div class="heroHomeSwiper swiper">
        <div class="swiper-wrapper flex !items-stretch">
  
          <!-- slide 1 -->
          <div class="swiper-slide h-auto flex items-center">
            <div class="appcontainer h-full flex flex-col mdmid:flex-row gap-3 md:gap-5  relative pt-4">
              <div class="pt-7 md:pt-12 pb-28 mdmid:w-1/2 mdmid:flex-1 order-2 lg:order-1">
                <h1 data-hero-slide-title
                  class="text-3xl xs:text-4xl font-bold sm:text-5xl md:text-6xl xl:text-7xl text-transparent bg-clip-text bg-gradient-to-tr from-gray-900 to-gray-700">
                  Ensemble rendons le
                  <span class="bg-clip-text bg-gradient-to-tr from-red-400 to-primary-600">Congo</span>
                  Meilleur
                </h1>
                <p data-hero-slide-text class="text-gray-600 leading-6 pt-8">
                  Faisons de notre pays un endroit meilleur pour chaque citoyen
                </p>
                <div class="pt-12" data-hero-slide-btn>
                  <a href="#" class="btn btn-primary !py-3.5 active:scale-95"> Adherer maintenant </a>
                </div>
              </div>
              <div class="mdmid:w-1/2 mdmid:flex-1 mdmid:h-auto relative flex order-1 mdmid:order-2 
              h-72 xs:h-80 sm:h-[22rem] md:h-[24rem] lg:h-full">
                <div class="absolute inset-x-0 h-3/5 bottom-0 bg-gradient-to-br from-primary-600 to-orange-400 rounded-xl"></div>
                <div class="h-full w-full relative px-2 pb-2" data-hero-slide-image>
                  <img src="{{asset('images/image0.webp')}}" alt="" width="1950" class="h-full w-full rounded-xl object-cover">
                </div>
              </div>
            </div>
          </div>
  
          <!-- slide 2 -->
          <div class="swiper-slide h-auto flex items-center">
            <div class="appcontainer h-full flex flex-col mdmid:flex-row gap-3 md:gap-5  relative pt-4">
              <div class="pt-7 md:pt-12 pb-28 mdmid:w-1/2 mdmid:flex-1 order-2 lg:order-1">
                <h1 data-hero-slide-title
                  class="text-3xl xs:text-4xl font-bold sm:text-5xl md:text-6xl xl:text-7xl text-transparent bg-clip-text bg-gradient-to-tr from-gray-900 to-gray-700">
                  Ensemble luttons pour le
                  <span class="bg-clip-text bg-gradient-to-tr from-red-400 to-primary-600">le progrès social.</span>
                </h1>

                <p data-hero-slide-text class="text-gray-600 leading-6 pt-8">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
  
                </p>
                <div class="pt-12" data-hero-slide-btn>
                  <a href="#" class="btn btn-primary !py-3.5 active:scale-95"> Adherer maintenant </a>
                </div>
              </div>
              <div class="mdmid:w-1/2 mdmid:flex-1 mdmid:h-auto relative flex order-1 mdmid:order-2 
              h-72 xs:h-80 sm:h-[22rem] md:h-[24rem] lg:h-full">
                <div class="absolute inset-x-0 h-3/5 bottom-0 bg-gradient-to-br from-primary-600 to-orange-400 rounded-xl"></div>
                <div class="h-full w-full relative px-2 pb-2" data-hero-slide-image>
                  <img src="{{asset('images/image1.webp')}}" alt="" width="1950" class="h-full w-full rounded-xl object-cover">
                </div>
              </div>
            </div>
          </div>
  
          <!-- slide 3 -->
          <div class="swiper-slide h-auto flex items-center">
            <div class="appcontainer h-full flex flex-col mdmid:flex-row gap-3 md:gap-5  relative pt-4">
              <div class="pt-7 md:pt-12 pb-28 mdmid:w-1/2 mdmid:flex-1 order-2 lg:order-1">
                <h1 data-hero-slide-title
                  class="text-3xl xs:text-4xl font-bold sm:text-5xl md:text-6xl xl:text-7xl text-transparent bg-clip-text bg-gradient-to-tr from-gray-900 to-gray-700">
                  Ensemble rendons
                  <span class="bg-clip-text bg-gradient-to-tr from-red-400 to-primary-600">Congo</span>
                  Meilleur
                </h1>
                <p data-hero-slide-text class="text-gray-600 leading-6 pt-8">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
  
                </p>
                <div class="pt-12" data-hero-slide-btn>
                  <a href="#" class="btn btn-primary !py-3.5 active:scale-95"> Adherer maintenant </a>
                </div>
              </div>
              <div class="mdmid:w-1/2 mdmid:flex-1 mdmid:h-auto relative flex order-1 mdmid:order-2 
              h-72 xs:h-80 sm:h-[22rem] md:h-[24rem] lg:h-full">
                <div class="absolute inset-x-0 h-3/5 bottom-0 bg-gradient-to-br from-primary-600 to-orange-400 rounded-xl"></div>
                <div class="h-full w-full relative px-2 pb-2" data-hero-slide-image>
                  <img src="{{asset('images/image2.webp')}}" alt="" width="1950" class="h-full w-full rounded-xl object-cover">
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </div>
  
  
      <div class="swiper-control-navigation">
        <div class="appcontainer flex items-center w-full gap-3 relative z-30">
          <div class="flex items-center gap-4 bg-gray-100 rounded-xl p-1.5">
            <button
              class="swip-prev-homeslide btnswiphero">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd"
                  d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                  clip-rule="evenodd" />
              </svg>
            </button>
            <div class="home-swiper-pagination flex gap-1">
              <span class="w-3 h-1 rounded-full bg-primary-800 flex"></span>
              <span class="w-3 h-1 rounded-full bg-gray-400 flex"></span>
              <span class="w-3 h-1 rounded-full bg-gray-400 flex"></span>
            </div>
            <button
              class="swip-next-homeslide btnswiphero">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd"
                  d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                  clip-rule="evenodd" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="mt-0 py-6 md:py-8 lg:py-10 bg-gray-50 patternedbg">
    <div class="appcontainer md:!px-20 lg:!px-28">
      <div class="relative grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-8 md:gap-6 lg:gap-10 absolutelineOnLeftRight">
        <div class="card-stat">
          <span class="font-bold text-xl sm:text-3xl md:text-4xl colored-text1">
            + 40
          </span>
          <span>
            Ans d'existance
          </span>
        </div>

        <div class="card-stat">
          <span class="font-bold text-xl sm:text-3xl md:text-4xl colored-text1">
            +2500
          </span>
          <span>
            Territoires
          </span>
        </div>

        <div class="card-stat">
          <span class="font-bold text-xl sm:text-3xl md:text-4xl colored-text1">
            + 25
          </span>
          <span>
            Federation a l'etranger
          </span>
        </div>

        <div class="card-stat">
          <span class="font-bold text-xl sm:text-3xl md:text-4xl colored-text1">
            40k+
          </span>
          <span>
            Membres
          </span>
        </div>
      </div>
    </div>
  </section>


  <section class="a-section">
    <div class="appcontainer section-d-2 relative">
      <div class="section-bloc-with-image relative">
        <div class="absolute w-4 h-20 -left-0 -rotate-45 rounded-full bg-red-400 top-4 z-20"></div>
        <div class="boxsectionImg">
          <img src="{{asset('images/image4.webp')}}" alt="images present" width="1980" height="auto">
        </div>
      </div>

      <div class="md:w-1/2 flex-1 md:py-3 xl:py-6">
        <div class="">
          <span class="subtitle1">Notre lutte</span>
          <h1 class="title1">
            Faisons de notre pays un endroit meilleur pour chaque citoyen
          </h1>
        </div>
        <div class="pt-8 space-y-2">
          <p class="text-paragraph">
            Notre pays a le potentiel d’être un endroit où chaque citoyen peut prospérer et atteindre ses objectifs. Mais pour y parvenir, nous devons travailler ensemble pour construire une société plus juste et équitable.
          </p>
          <p class="text-paragraph">
            En tant que citoyens, nous avons le pouvoir de faire la différence en votant pour des dirigeants qui partagent notre vision d’un avenir meilleur. Nous pouvons également nous impliquer dans nos communautés en faisant du bénévolat et en soutenant des initiatives locales.
          </p>
        </div>
        <div class="flex flex-wrap items-center gap-3 pt-10">
          <a href="adhesion.html" class="btn btn-primary"> Devenir Membre </a>
          <a href="pages/about.html" class="btn btn-outlined">En savoir plus</a>
        </div>
      </div>
    </div>
  </section>

  <section class="a-section-alt relative">
    <div class="absolute inset-0 mainpatern"></div>
    <div class="appcontainer relative">
      <div class="max-w-3xl mx-auto text-center">
        <div class="">
          <span class="subtitle1">Valeurs</span>
          <h1 class="title1 capitalize">
            Nos combats sont guidés par nos valeurs.
          </h1>
          <p class="text-paragraph pt-5">
            Pour garantir les droits de tous les citoyens, nous devons travailler ensemble et construire un pays meilleur pour nos enfants. Nous devons donc prendre des initiatives appropriées.
          </p>
        </div>
      </div>
      <div class="pt-10 md:pt-12 lg:pt-14 grid xs:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-8 md:gap-6 lg:gap-10">

        <div class="card-withicon">
          <div class="box-img">
            <span class="imgbox">
              <img src="{{asset('icons/democraty.png')}}" alt="icon peace" width="240" height="240" class="icon">
            </span>
          </div>
          <div class="content">
            <h3 class="title-ci">
              La democratie
            </h3>
            <p class="content-ci">
              La démocratie est la clé et la base de tout système politique juste et équitable. 
            </p>
          </div>
        </div>

        <div class="card-withicon">
          <div class="box-img">
            <span class="imgbox">
              <img src="{{asset('icons/equality.png')}}" alt="icon peace" width="240" height="240" class="icon">
            </span>
          </div>
          <div class="content">
            <h3 class="title-ci">
              L'Egalite
            </h3>
            <p class="content-ci">
              Notre parti politique UDPS est un fervent défenseur de l'égalité pour tous les citoyens. 
            </p>
          </div>
        </div>


        <div class="card-withicon">
          <div class="box-img">
            <span class="imgbox">
              <img src="{{asset('icons/diversity.png')}}" alt="icon peace" width="240" height="240" class="icon">
            </span>
          </div>
          <div class="content">
            <h3 class="title-ci">
              La liberte
            </h3>
            <p class="content-ci">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Unde laborum
            </p>
          </div>
        </div>


        <div class="card-withicon">
          <div class="box-img">
            <span class="imgbox">
              <img src="{{asset('icons/peace.png')}}" alt="icon peace" width="240" height="240" class="icon">
            </span>
          </div>
          <div class="content">
            <h3 class="title-ci">
              La justice
            </h3>
            <p class="content-ci">
              Notre parti politique UDPS est un fervent défenseur de la justice pour tous les citoyens. 
            </p>
          </div>
        </div>


        <div class="card-withicon">
          <div class="box-img">
            <span class="imgbox">
              <img src="{{asset('icons/security.png')}}" alt="icon peace" width="240" height="240" class="icon">
            </span>
          </div>
          <div class="content">
            <h3 class="title-ci">
              La justice
            </h3>
            <p class="content-ci">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Unde laborum
            </p>
          </div>
        </div>


        <div class="card-withicon">
          <div class="box-img">
            <span class="imgbox">
              <img src="{{asset('icons/justice.png')}}" alt="icon peace" width="240" height="240" class="icon">
            </span>
          </div>
          <div class="content">
            <h3 class="title-ci">
              La justice
            </h3>
            <p class="content-ci">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Unde laborum
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>



  <section class="a-section">
    <div class="appcontainer section-d-2 relative">

      <div class="md:w-1/2 flex-1 md:py-6 lg:py-10 xl:py-12">
        <div class="">
          <span class="subtitle1">Notre lutte</span>
          <h1 class="title1">
            Nous luttons pour la bonne cause, le bien de notre nation
          </h1>
        </div>
        <ul role="listitem" class="pt-8 space-y-2 grid gap-y-3 gap-x-4 sm:gap-x-6 md:gap-x-5 lg:gap-x-8">
          <li class="check-item-lst">
            <img src="{{asset('icons/checkIcoFill.png')}}" alt="check fill" width="20" height="20" class="w-6 h-6">
            La promotion de la démocratie et de la participation citoyenne à tous les niveaux de gouvernement.
          </li>
          <li class="check-item-lst">
            <img src="{{asset('icons/checkIcoFill.png')}}" alt="check fill" width="20" height="20" class="w-4 xs:w-5 h-4 xs:h-5 sm:w-6 sm:h-6">
            La lutte contre la corruption et la promotion de la transparence et de la responsabilité dans tous les domaines de la vie politique.
          </li>
          <li class="check-item-lst">
            <img src="/icons/checkIcoFill.png" alt="check fill" width="20" height="20" class="w-4 xs:w-5 h-4 xs:h-5 sm:w-6 sm:h-6">
            La défense des droits fondamentaux des citoyens, y compris la liberté d'expression et de la presse, la protection des minorités et l'égalité des chances pour tous.
          </li>
        </ul>
        <div class="flex flex-wrap items-center gap-3 pt-10">
          <a href="" class="btn btn-primary"> Faire une donation </a>
          <a href="" class="btn btn-outlined">Rejoindre le parti</a>
        </div>
      </div>
      <div class="section-bloc-with-image">
        <div class="boxsectionImg">
          <img src="/images/image8.webp" alt="images present" width="1980" height="auto">
        </div>
        <div class="card hidden xs:flex xs:flex-col xs:w-64 md:w-72 lg:w-3/5 absolute -bottom-10 md:bottom-6 -left-2 md:-left-6 xl:-left-12">
          <p class="text-xs sm:text-sm md:text-base text-gray-500 italic">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic magni temporibus aperiam et q
          </p>
          <div class="flex items-center pt-4">
            <div class="flex flex-col">
              <h2 class="text-gray-700 text-base md:text-lg font-bold">Joe Doe</h2>
              <span class="text-gray-500 text-xs sm:text-sm md:text-base">Lorem ipsum</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div data-modal data-modal-id="video_vis" data-modal-visible="false" class=""></div>
  <section class="a-section-alt relative">
    <div class="absolute inset-0 mainpatern"></div>
    <div class="appcontainer relative">
      <div class="max-w-3xl mx-auto text-center">
        <div class="">
          <span class="subtitle1">Vision et mission</span>
          <h1 class="title1">
            Nous luttons pour la bonne cause, le bien de notre nation
          </h1>
        </div>
      </div>
      <div class="relative mx-auto aspect-video max-w-3xl lg:max-w-4xl mt-10 md:mt-12 lg:mt-14">
        <img src="/images/image7.webp" alt="thumbmail video" width="1920" height="auto"
          class="w-full h-full object-cover rounded-2xl">
        <div class="absolute inset-0 rounded-xl bg-gray-800/30 flex items-center justify-center">
          <button data-toggle-modal data-modal-target-id="video_vis"
            class="outline-none p-4 bg-white text-gray-500 active:scale-95 duration-300 ease-linear bg-opacity-80 backdrop-filter backdrop-blur-lg rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
              <path
                d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>


  <!-- evenement  -->
  <section class="a-section">
    <div class="appcontainer">
      <div class="max-w-3xl mx-auto text-center">
        <div class="">
          <span class="subtitle1">Evenements</span>
          <h1 class="title1">
            Evenements proches
          </h1>
        </div>
      </div>
      <div class="mt-10 md:mt-12 lg:mt-14 section-d-2">
        <div class="section-bloc-with-image relative">
          <div class="boxsectionImg">
            <img src="/images/image8.webp" alt="images present" width="1980" height="auto">
            <div class="absolute inset-0 rounded-xl bg-gray-800/30 flex items-center justify-center">
              <button
                class="outline-none p-4 bg-white text-gray-500 active:scale-95 duration-300 ease-linear bg-opacity-80 backdrop-filter backdrop-blur-lg rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                  <path
                    d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                </svg>
              </button>
            </div>
          </div>
          <div
            class="absolute left-1/2 -translate-x-1/2 bottom-6 sm:bottom-8 xl:bottom-10 w-full max-w-lg px-6 sm:px-8 xl:px-10">
            <div class="grid grid-cols-3 gap-4 sm:gap-6 md:gap-5 lg:gap-6">
              <div
              class="flex flex-col bg-white backdrop-filter bg-opacity-80 backdrop-blur-md text-center rounded-lg overflow-hidden">
              <span class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-gray-800 px-4 py-3">25</span>
              <span class="bg-white px-4 py-2">Jours</span>
            </div>

            <div
              class="flex flex-col bg-white backdrop-filter bg-opacity-80 backdrop-blur-md text-center rounded-lg overflow-hidden">
              <span class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-gray-800 px-4 py-3">10</span>
              <span class="bg-white px-4 py-2">heurs</span>
            </div>

            <div
              class="flex flex-col bg-white backdrop-filter bg-opacity-80 backdrop-blur-md text-center rounded-lg overflow-hidden">
              <span class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-gray-800 px-4 py-3">25</span>
              <span class="bg-white px-4 py-2">Minute</span>
            </div>
            </div>
          </div>
        </div>
        <div class="md:w-1/2 flex-1 ">
          <ul role="listitem" class="flex flex-col space-y-2.5">
            <li class="flex">
              <a href="#" class="group event-like-lst-item">
                <div class="flex items-center gap-4">
                  <span class="bg-primary-600 text-white text-sm px-2 rounded-md">Evenement</span>
                  <span class="text-primary-600 text-sm">2022-02-20</span>
                </div>
                <h2>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </h2>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur aperiam eligendi doloremque
                  optio, facere iure blanditiis totam provident? Adipisci facere cum saepe iste repellendus sunt
                  incidunt esse placeat fuga quas?
                </p>
              </a>
            </li>
            <li class="flex">
              <a href="#" class="group event-like-lst-item">
                <div class="flex items-center gap-4">
                  <span class="bg-primary-600 text-white text-sm px-2 rounded-md">Evenement</span>
                  <span class="text-primary-600 text-sm">2022-02-20</span>
                </div>
                <h2>Evenement evenement</h2>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur aperiam eligendi doloremque
                  optio, facere iure blanditiis totam provident? Adipisci facere cum saepe iste repellendus sunt
                  incidunt esse placeat fuga quas?
                </p>
              </a>
            </li>
            <li class="flex">
              <a href="#" class="group event-like-lst-item">
                <div class="flex items-center gap-4">
                  <span class="bg-primary-600 text-white text-sm px-2 rounded-md">Evenement</span>
                  <span class="text-primary-600 text-sm">2022-02-20</span>
                </div>
                <h2>Evenement evenement</h2>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur aperiam eligendi doloremque
                  optio, facere iure blanditiis totam provident? Adipisci facere cum saepe iste repellendus sunt
                  incidunt esse placeat fuga quas?
                </p>
              </a>
            </li>
          </ul>
          <div class="flex items-center gap-3 pt-10">
            <a href="#" class="btn btn-primary">Plus d'evenements</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- actualites recentes  -->
  <section class="a-section-alt relative">
    <div class="absolute inset-0 mainpatern"></div>
    <div class="appcontainer relative">
      <div class="max-w-3xl mx-auto text-center">
        <div class="">
          <span class="subtitle1">Actualites</span>
          <h1 class="title1">
            Dernieres nouvelles
          </h1>
        </div>
      </div>
      <div class="swiper !pt-10 lg:!pt-12 swiperRecentblog">
        <div class="swiper-wrapper pb-8">
          <div class="swiper-slide !bg-transparent">
            <div class="card card-blog group">
              <div class="relative">
                <img src="/images/image1.webp" alt="images present" width="1980" height="auto" class="image">
                <div class="absolute bottom-2 right-2 bg-primary-600 text-white rounded-md px-3">
                  12-12-2022
                </div>
              </div>
              <div class="pt-6">
                <a href="#" class="title-blog">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. !
                </a>
              </div>
              <div class="flex pt-7">
                <a href="#" class="btn">
                  Lire Plus
                </a>
              </div>
            </div>
          </div>

          <div class="swiper-slide !bg-transparent">
            <div class="card card-blog group">
              <div class="relative">
                <img src="/images/image5.webp" alt="images present" width="1980" height="auto" class="image">
                <div class="absolute bottom-2 right-2 bg-primary-600 text-white rounded-md px-3">
                  12-12-2022
                </div>
              </div>
              <div class="pt-6">
                <a href="#" class="title-blog">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. !
                </a>
              </div>
              <div class="flex pt-7">
                <a href="#" class="btn">
                  Lire Plus
                </a>
              </div>
            </div>
          </div>


          <div class="swiper-slide !bg-transparent">
            <div class="card card-blog group">
              <div class="relative">
                <img src="/images/image6.webp" alt="images present" width="1980" height="auto" class="image">
                <div class="absolute bottom-2 right-2 bg-primary-600 text-white rounded-md px-3">
                  12-12-2022
                </div>
              </div>
              <div class="pt-6">
                <a href="#" class="title-blog">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. !
                </a>
              </div>
              <div class="flex pt-7">
                <a href="#" class="btn">
                  Lire Plus
                </a>
              </div>
            </div>
          </div>


          <div class="swiper-slide !bg-transparent">
            <div class="card card-blog group">
              <div class="relative">
                <img src="/images/image8.webp" alt="images present" width="1980" height="auto" class="image">
                <div class="absolute bottom-2 right-2 bg-primary-600 text-white rounded-md px-3">
                  12-12-2022
                </div>
              </div>
              <div class="pt-6">
                <a href="#" class="title-blog">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. !
                </a>
              </div>
              <div class="flex pt-7">
                <a href="#" class="btn">
                  Lire Plus
                </a>
              </div>
            </div>
          </div>


        </div>
      </div>
      <div class="pt-10 flex flex-wrap items-center justify-between gap-7">
        <div class="flex gap-3 items-center p-1.5 bg-gray-100 rounded-xl">
          <button
            class="swip-prev-recentblog p-3 flex outline-none bg-gray-200 rounded-lg duration-300 ease-linear active:bg-gray-300 text-gray-600 active:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
              <path fill-rule="evenodd"
                d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                clip-rule="evenodd" />
            </svg>
          </button>
          <div class="recentblog-swiper-pagination px-3 flex gap-1">
          </div>
          <button
            class="swip-next-recentblog p-3 flex outline-none bg-gray-200 rounded-lg duration-300 ease-linear active:bg-gray-300 text-gray-600 active:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
              <path fill-rule="evenodd"
                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                clip-rule="evenodd" />
            </svg>
          </button>
        </div>
        <div class="min-w-max ">
          <a href="#" class="btn btn-primary">
            Voir plus
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- call to action -->
  <section class="a-section pb-24 md:pb-32">
    <div class="appcontainer">
      <div class="text-center max-w-2xl md:max-w-2xl lg:max-w-3xl mx-auto">
        <h2
          class="mb-8 text-3xl font-bold md:text-4xl lg:text-5xl text-transparent bg-clip-text bg-gradient-to-tr from-gray-900 to-gray-700">
          Rejoignez-nous dans notre lutte pour la démocratie et le progrès social.
        </h2>
        <p class="mb-10 text-base md:text-lg text-gray-600">
          Nous croyons en un avenir juste et équitable pour tous, et nous avons besoin de votre aide pour y parvenir. Rejoignez-nous dès aujourd'hui et ensemble, nous pourrons faire la différence.
        </p>
        <div class="mb-11 md:inline-block">
          <a class="btn btn-primary" href="adhesion.html">Adherer le parti</a>
        </div>
        <div class="flex flex-wrap items-center justify-center -m-1">
          <div class="w-auto p-1">
            <div class="flex flex-wrap">
              <div class="w-auto">
                <img src="/images/image7.webp" alt="" width="200" height="auto"
                  class="w-10 h-10 rounded-full border-2 border-primary-200">
              </div>
              <div class="w-auto -ml-3">
                <img src="/images/image8.webp" alt="" width="200" height="auto"
                  class="w-10 h-10 rounded-full border-2 border-primary-200">
              </div>
              <div class="w-auto -ml-3">
                <img src="/images/image5.webp" alt="" width="200" height="auto"
                  class="w-10 h-10 rounded-full border-2 border-primary-200">
              </div>
            </div>
          </div>
          <div class="w-auto p-1">
            <p class="text-gray-600 font-medium">
              <span>Rejoingnez</span>
              <span class="font-bold">250k+</span>
              <span>autres membres</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection