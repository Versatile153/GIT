



@extends('layouts.app')
@section('content')



 {{-- <h2>{{ $content->heading1 }}</h2> --}}
    {{-- <p>{{ $content->content }}</p> --}}


<div id="hs_cos_wrapper_homepage_promo_bar" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">








</div>

<div id="hs_cos_wrapper_homepage_page_header" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">

















  <section id="" class="wf-section wf-page-header -neutral -padding-top-md -padding-bottom-md " style="background:linear-gradient(rgb(10, 3, 109),rgb(227, 228, 235))" >
    <div class="wf-section-wrapper">

    <div class="wf-page-header__wrapper">

      <div class="wf-page-header__content-wrapper">

          <p class="wf-page-header__tagline -microheading text-center" style="font-family: 'Montserrat', sans-serif !important;font-weight:800; color:white">{{ $content->heading1 }}</p>





    <h1 class="wf-page-header__heading -neutral -display text-center "style="font-family: 'Montserrat', sans-serif !important;font-weight:800;color:white;">{{ $content->heading2 }}</h1>





          <p class="wf-page-header__description "style="font-family: 'Montserrat', sans-serif !important;color:white;">{{ $content->content }}</p>



          <div class="wf-page-header__cta-wrapper">
















      <a class="
  cl-button -primary -large wf-page-header__cta homepage-hero-cta" href="#" rel="noreferrer ">
        Get a demo

          <span class="visually-hidden">Get a demo</span>

      </a>




















      <a class="
  cl-button -secondary -large wf-page-header__cta homepage-hero2-cta" href="#" rel="noreferrer ">
       Donate Now

          <span class="visually-hidden">Donate Now</span>

      </a>





          </div>



          <p class="wf-page-header__disclaimer -small" style="color: white;"style="font-family: 'Montserrat', sans-serif !important;">Get a demo of our services,from our resource persons</p>

      </div>


        <div class="wf-page-header__image-wrapper ">


            <img src="{{ asset('storage/' . $content->image) }}" alt="Page Image">
        </div>


    </div>

    </div>
  </section>


</div>

<div id="hs_cos_wrapper_homepage_logo_carousel" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">


















  <section id="homepage_logo_carousel" class="wf-section wf-logo-carousel -large -white -padding-top-s -padding-bottom-s" data-desktop-display="true">
    <div class="wf-section-wrapper">




      <h2 class="wf-logo-carousel-header " style="font-family: 'Montserrat', sans-serif !important;font-weight:800;">200 million+ people in over 120 countries hope to escape from poverty from The Chikamadu Foundation.</h2>




  <div class="cl-carousel -white -no-dots">
      <div class="cl-carousel-rail" data-cl-carousel="rail">
        <ul class="cl-carousel-train wf-logo-carousel-container">

            <li class="cl-carousel-slide wf-logo-carousel-logo" tabindex="-1">

              <div class="wf-logo-carousel-logo-container">

                <img class="wf-logo-carousel-image" src="https://media.istockphoto.com/id/146751932/photo/african-family.webp?b=1&s=170667a&w=0&k=20&c=rFwSZgW5YILNEl6MIZ0Ndnvo3lg4PYxM8e1ZqgA1-jE=" sizes="(max-width: 720px) 100vw, 720px">

              </div>

            </li>

            <li class="cl-carousel-slide wf-logo-carousel-logo" tabindex="-1">

              <div class="wf-logo-carousel-logo-container">

                <img class="wf-logo-carousel-image" src="https://media.istockphoto.com/id/1430344161/photo/african-street-vendor.webp?b=1&s=170667a&w=0&k=20&c=1KGnzLpOHrEmFQN40QpEfFtbYhFpxEje0KF-CJ1rg5o=" sizes="(max-width: 354px) 100vw, 354px">

              </div>

            </li>

            <li class="cl-carousel-slide wf-logo-carousel-logo" tabindex="-1">

              <div class="wf-logo-carousel-logo-container">

                <img class="wf-logo-carousel-image" src="https://media.istockphoto.com/id/1432208095/photo/army-doctor-playing-with-refugee-children-at-a-community-center.webp?b=1&s=170667a&w=0&k=20&c=9NP9EKEM5M_BA8CJ30fQ7AYF0xfvS8wtOIP6Ue3OoaI=" sizes="(max-width: 381px) 100vw, 381px">

              </div>

            </li>

            <li class="cl-carousel-slide wf-logo-carousel-logo" tabindex="-1">

              <div class="wf-logo-carousel-logo-container">

                <img class="wf-logo-carousel-image" src="https://media.istockphoto.com/id/1137590552/photo/female-farmer-planting-rice-in-africa-malawi.webp?b=1&s=170667a&w=0&k=20&c=eHhEqL7Vfa1QEI0jIxj_TlbxAKr489OLbdaJS-WQjnc=" sizes="(max-width: 626px) 100vw, 626px">

              </div>

            </li>

            <li class="cl-carousel-slide wf-logo-carousel-logo" tabindex="-1">

              <div class="wf-logo-carousel-logo-container">

                <img class="wf-logo-carousel-image" src="https://media.istockphoto.com/id/1417918534/photo/african-street-vendor.webp?b=1&s=170667a&w=0&k=20&c=MiSsMtUoIfM1UFToo4RTeKuQPj7mAxo9T_0KX6hAWrQ=" sizes="(max-width: 300px) 100vw, 300px">

              </div>

            </li>

            <li class="cl-carousel-slide wf-logo-carousel-logo" tabindex="-1">

              <div class="wf-logo-carousel-logo-container">

                <img class="wf-logo-carousel-image" src="https://media.istockphoto.com/id/911839908/photo/african-family.jpg?s=612x612&w=0&k=20&c=C0FBfG924XuViiLmqtjXFVu0nhTkOM7WnXxEgxZn2TI=" sizes="(max-width: 320px) 100vw, 320px">

              </div>

            </li>

            <li class="cl-carousel-slide wf-logo-carousel-logo" tabindex="-1">

              <div class="wf-logo-carousel-logo-container">

                <img class="wf-logo-carousel-image" src="https://media.istockphoto.com/id/1368539281/photo/african-family-village.jpg?s=612x612&w=0&k=20&c=wG6JfheNgjagGBji8FKmnUnzQW-8XmOPnx5Ujn2zAos=" sizes="(max-width: 320px) 100vw, 320px">

              </div>

            </li>

            <li class="cl-carousel-slide wf-logo-carousel-logo" tabindex="-1">

              <div class="wf-logo-carousel-logo-container">

                <img class="wf-logo-carousel-image" src="https://media.istockphoto.com/id/1353752056/photo/african-child-with-an-axe-working-and-cooking-at-a-farm.jpg?s=612x612&w=0&k=20&c=wX2dZLQFeDHK7ZuR6PEgpcdTFmFHCMP-dSrGKqxiafg=" sizes="(max-width: 320px) 100vw, 320px">

              </div>

            </li>

            <li class="cl-carousel-slide wf-logo-carousel-logo" tabindex="-1">

              <div class="wf-logo-carousel-logo-container">

                <img class="wf-logo-carousel-image" src="https://media.istockphoto.com/id/147496184/photo/xhosa-woman-in-a-wheelchair.jpg?s=612x612&w=0&k=20&c=XoMPLRoKrsw9U4C6wV_sQY9QmebiQozNpOdj4R_KhIw=" sizes="(max-width: 290px) 100vw, 290px">

              </div>

            </li>

            <li class="cl-carousel-slide wf-logo-carousel-logo" tabindex="-1">

              <div class="wf-logo-carousel-logo-container">

                <img class="wf-logo-carousel-image" src="https://media.istockphoto.com/id/176007658/photo/rural-african-child.jpg?s=612x612&w=0&k=20&c=TnQ-X_4R9P-C6Kvd6m6XKmVhulqW-ql4zTG_vdnYq2g=" sizes="(max-width: 3840px) 100vw, 3840px">

              </div>

            </li>

            <li class="cl-carousel-slide wf-logo-carousel-logo" tabindex="-1">

              <div class="wf-logo-carousel-logo-container">

                <img class="wf-logo-carousel-image" src="https://media.istockphoto.com/id/466213947/photo/rural-boy.jpg?s=612x612&w=0&k=20&c=SKG5feC9cpyZ1FpRbSZ03v3gDvhpnGTiLmoeNTn8OBk=" sizes="(max-width: 292px) 100vw, 292px">

              </div>

            </li>

            <li class="cl-carousel-slide wf-logo-carousel-logo" tabindex="-1">

              <div class="wf-logo-carousel-logo-container">

                <img class="wf-logo-carousel-image" src="https://media.istockphoto.com/id/182916257/photo/two-young-woman-in-rural-area.jpg?s=612x612&w=0&k=20&c=W2yzXGUaqTolnAoswXY_ElvFGAIOS5ni0VHmdtnfq-U=" sizes="(max-width: 313px) 100vw, 313px">

              </div>

            </li>

        </ul>
      </div>
      <div class="cl-carousel-controls">
        <button class="cl-round-button -white -medium" data-cl-carousel="<">
          <svg class="cl-icon" aria-hidden="true">
            <use xlink:href="#left" />
          </svg>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="cl-round-button -white -medium" data-cl-carousel=">">
          <svg class="cl-icon" aria-hidden="true">
            <use xlink:href="#right" />
          </svg>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="cl-carousel-dots">
        <div class="cl-carousel-dots-rail">
          <ul data-cl-carousel="dots"></ul>
        </div>
      </div>
    </div>

    </div>
  </section>








</div>

<div id="hs_cos_wrapper_homepage_company_story" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
























  <section id="homepage_company_story" class="wf-section wf-company-story -light -padding-top-md -padding-bottom-md">
    <div class="wf-section-wrapper">







      <div class="wf-company-story_grid - -medium-media" tabindex="-1">



  <div class="wf-company-story_media" data-cl-modal="wf-company-story_media-modal-homepage_company_story-1">


















          <button class="cl-playButton -small wf-company-story_play-button -dark" aria-label="Play video: How HubSpot works" data-cl-modal="wf-company-story_media-modal-homepage_company_story-1"></button>

          <div id="wf-company-story_media-modal-homepage_company_story-1" class="cl-modal -light" role="dialog" aria-modal="true" aria-label="Play video: How HubSpot works">
            <div class="cl-lightbox cl-modal-backdrop wf-company-story-lightbox" data-cl-modal="close">
              <div class="wf-company-story_media-modal-container">
                <div class="cl-lightbox-content-container">
                  <button type="button" class="cl-round-button -light -medium cl-lightbox-close" data-cl-modal="close" aria-label="close dialog">
                    <svg class="cl-icon" aria-hidden="true">
                      <use href="#close" />
                    </svg>
                  </button>

                  <div class="cl-loading -dark -medium -secondary">
                    <svg viewbox="0 0 50 50" aria-hidden="true">
                      <circle cx="25" cy="25" r="21" fill="none" stroke-width="7"></circle>
                      <circle cx="25" cy="25" r="21" fill="none" stroke-width="7"></circle>
                    </svg>
                  </div>
                  <div class="wf-company-story_media-video">

                    <div class="hs-video-widget" data-hsv-embed-id="3f8d72ec-bde4-45f7-80ac-f1f3e23aa4b6">
  <img src="" style="max-width: 100%" alt="HubSpot Video" data-hsv-id="142982227087" data-hsv-play-button-color="2e475d" data-hsv-autoplay="false">
</div>


                    </div>
                </div>
              </div>
            </div>
          </div>




    <img src="https://media.istockphoto.com/id/1461578246/photo/village-african-family.jpg?s=612x612&w=0&k=20&c=6QQCHPCLtIIPThqhJsMSD1hrYRrGHxSM9AqYt3g1-bU=" alt="Chikamadu Foundation is  your key out of needs" height="310" width="527" loading="lazy">
  </div>
  <div class="wf-company-story_rich-text -light shadow">



  <h2 class="wf-company-story_rich-text-heading text-center  " style="font-family: 'Montserrat', sans-serif !important;font-weight:800;">The Chikamadu Foundation?</h2>




    <div class="cl-rich-text"style="font-family: 'Montserrat', sans-serif !important;">
      <p><span>We are a Charity Foundation providing hope for the hopeless.
        We Promote Sustainable Development programs and working tirelessly to achieve it's goals.
        CHIKAMADU CHARITY FOUNDATION is not a profit oriented organization, it's an organization with focus on changing lives through health, education and lifting people from extreme poverty.</span></p>
    </div>


    <div class="wf-company-story_cta-buttons">







      <div class="wf-company-story_cta-button">







            <a class="cl-button -primary -medium homepage-platform-demo" href="#" rel="noreferrer ">
              Get a demo

                <span class="visually-hidden">Get a demo</span>

            </a>



      </div>







      <div class="wf-company-story_cta-button">







            <a class="cl-button -secondary -medium homepage-platform-free" href="#" rel="noreferrer ">
              Donate Now

                <span class="visually-hidden">Donate Now</span>

            </a>



      </div>

    </div>

  </div>

      </div>




    </div>
  </section>




</div>

<div id="hs_cos_wrapper_homepage_crm_platform" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">














  <section id="homepage_crm_platform" class="wf-section  -neutral -padding-top-md -padding-bottom-xs">
    <div class="wf-section-wrapper">

    <div class="wf-crm-platform">
      <div class="wf-crm-platform__container">
          <img class="wf-crm-platform__image" src="https://media.istockphoto.com/id/1430915713/photo/support-training-and-coaching-a-call-center-manager-is-happy-to-help-her-team-collaboration.webp?b=1&s=170667a&w=0&k=20&c=bHjRWHinX10FFYgtakThIdXtA7BQ62Nf-raYrBImIr0=" alt="CMF Foundation." loading="lazy" width="907" height="468" sizes="(max-width: 907px) 100vw, 907px">




    <h2 class="wf-crm-platform__heading -neutral "style="font-family: 'Montserrat', sans-serif !important;font-weight:800;text-center">Your donations shall be duely accounted for...</h2>





          <div class="wf-crm-platform__description"style="font-family: 'Montserrat', sans-serif !important;">At the heart of compassion and commitment lies the Chikamadu Foundation, a charitable organization with a singular mission - to alleviate poverty and suffering, bringing hope and transformative change to communities in need.
        Established 2024, we are driven by the belief that every individual deserves the chance to lead a dignified and fulfilling life</div>


          <div class="wf-crm-platform__cta-buttons">







              <div class="wf-crm-platform__cta-button">

















      <a class="
  cl-button -primary -medium  homepage-products-demo" href="#" rel="noreferrer ">
        Get a demo

          <span class="visually-hidden">Get a demo</span>

      </a>




              </div>







              <div class="wf-crm-platform__cta-button">

















      <a class="
  cl-button -secondary -medium  homepage-products-free" href="#" rel="noreferrer ">
        Donate Now

          <span class="visually-hidden">Donate Now</span>

      </a>




              </div>

          </div>


      </div>
    </div>

    </div>
  </section>

</div>

<div id="hs_cos_wrapper_homepage_product_overview" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">














  <section id="" class="wf-section wf-product-cards -neutral -padding-top-xs -padding-bottom-md">
    <div class="wf-section-wrapper">

  <div class="wf-product-cards__container">


    <div class="wf-product-cards__card cl-card -light -container-01 -hoverable "><div class="wf-product-cards__content">
        <div class="wf-product-cards__heading--wrapper">

          <img src="https://www.hubspot.com/hubfs/MarketingHub_Icon_2023_Gradient_RGB_24px.svg" alt="" width="30" height="30" loading="lazy" class="wf-product-cards__heading--image">










    <h3 class="wf-product-cards__heading "style="font-family: 'Montserrat', sans-serif !important;">Transparency<span class="wf-product-cards__heading--trademark"></span></h3>



        </div>
        <p class="wf-product-cards__description"style="font-family: 'Montserrat', sans-serif !important;">Increase transparency by providing clear information about the purpose, goals, and outcomes of each event or campaign.</p>

        <div class="wf-product-cards__features">



    <h4 class="wf-product-cards__feature-list--heading ">Popular Features</h4>



          <div class="wf-product-cards__feature-list--items">
            <ul>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Donor and Volunteer Mobilization
              </li>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Impact Visualization:
              </li>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                 Analytics
              </li>

            </ul>
          </div>
        </div>


        <div class="wf-product-cards__cta-wrapper">
















      <a class="
  cl-button -primary -medium wf-product-cards__cta homepage-marketing" href="#" rel="noreferrer ">
        Learn more



      </a>





        </div>

      </div>
    </div>


    <div class="wf-product-cards__card cl-card -light -container-01 -hoverable "><div class="wf-product-cards__content">
        <div class="wf-product-cards__heading--wrapper">

          <img src="https://www.hubspot.com/hubfs/Imported%20sitepage%20images/SalesHub_Icon_Gradient_RGB_24px.svg" alt="" width="30" height="30" loading="lazy" class="wf-product-cards__heading--image">










    <h3 class="wf-product-cards__heading "style="font-family: 'Montserrat', sans-serif !important;">Empowerment Through Knowledge<span class="wf-product-cards__heading--trademark"></span></h3>



        </div>
        <p class="wf-product-cards__description"style="font-family: 'Montserrat', sans-serif !important;">The Empowerment Through Knowledge feature is designed to highlight the foundation's dedication to providing educational opportunities that empower individuals, break the cycle of poverty, and foster sustainable development. </p>

        <div class="wf-product-cards__features">



    <h4 class="wf-product-cards__feature-list--heading ">Popular Features</h4>



          <div class="wf-product-cards__feature-list--items">
            <ul>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Read Success Stories
              </li>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Educational Programs Overview:
              </li>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Interactive Learning Resources:
              </li>

            </ul>
          </div>
        </div>


        <div class="wf-product-cards__cta-wrapper">
















      <a class="
  cl-button -primary -medium wf-product-cards__cta homepage-sales" href="#" rel="noreferrer ">
        Learn more



      </a>





        </div>

      </div>
    </div>


    <div class="wf-product-cards__card cl-card -light -container-01 -hoverable "><div class="wf-product-cards__content">
        <div class="wf-product-cards__heading--wrapper">

          <img src="https://www.hubspot.com/hubfs/Imported%20sitepage%20images/ServiceHub_Icon_Gradient_RGB_24px.svg" alt="" width="30" height="30" loading="lazy" class="wf-product-cards__heading--image">










    <h3 class="wf-product-cards__heading "style="font-family: 'Montserrat', sans-serif !important;">Donor Recognition Feature<span class="wf-product-cards__heading--trademark"></span></h3>



        </div>
        <p class="wf-product-cards__description"style="font-family: 'Montserrat', sans-serif !important;">The Donor Recognition feature acknowledges and appreciates the generosity of contributors, creating a sense of appreciation and strengthening the relationship between the foundation and its donors.</p>

        <div class="wf-product-cards__features">



    <h4 class="wf-product-cards__feature-list--heading ">Popular Features</h4>



          <div class="wf-product-cards__feature-list--items">
            <ul>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Donor Wall:
              </li>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Donor Spotlight Stories:
              </li>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Acknowledgment in Publications:
              </li>

            </ul>
          </div>
        </div>


        <div class="wf-product-cards__cta-wrapper">
















      <a class="
  cl-button -primary -medium wf-product-cards__cta homepage-service" href="#" rel="noreferrer ">
        Learn more



      </a>





        </div>

      </div>
    </div>


    <div class="wf-product-cards__card cl-card -light -container-01 -hoverable "><div class="wf-product-cards__content">
        <div class="wf-product-cards__heading--wrapper">

          <img src="https://www.hubspot.com/hubfs/Imported%20sitepage%20images/CMSHub_Icon_Gradient_RGB_24px.svg" alt="" width="30" height="30" loading="lazy" class="wf-product-cards__heading--image">










    <h3 class="wf-product-cards__heading "style="font-family: 'Montserrat', sans-serif !important;">Join the Movement<span class="wf-product-cards__heading--trademark"></span></h3>



        </div>
        <p class="wf-product-cards__description" style="font-family: 'Montserrat', sans-serif !important;">Encourage visitors to actively participate in ongoing campaigns by prominently featuring a call-to-action button. </p>

        <div class="wf-product-cards__features">



    <h4 class="wf-product-cards__feature-list--heading ">Popular Features</h4>



          <div class="wf-product-cards__feature-list--items">
            <ul>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Message from Leadership:
              </li>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Explanation of Key Metrics:
              </li>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Recognition Events
              </li>

            </ul>
          </div>
        </div>


        <div class="wf-product-cards__cta-wrapper">
















      <a class="
  cl-button -primary -medium wf-product-cards__cta homepage-cms" href="#" rel="noreferrer ">
        Learn more



      </a>





        </div>

      </div>
    </div>


    <div class="wf-product-cards__card cl-card -light -container-01 -hoverable "><div class="wf-product-cards__content">
        <div class="wf-product-cards__heading--wrapper">

          <img src="https://www.hubspot.com/hubfs/Imported%20sitepage%20images/OperationsHub_Icon_Gradient_RGB_24px.svg" alt="" width="30" height="30" loading="lazy" class="wf-product-cards__heading--image">










    <h3 class="wf-product-cards__heading "style="font-family: 'Montserrat', sans-serif !important;">Fundraising Campaigns<span class="wf-product-cards__heading--trademark"></span></h3>



        </div>
        <p class="wf-product-cards__description"style="font-family: 'Montserrat', sans-serif !important;">Showcase ongoing and upcoming fundraising campaigns with clear goals and objectives.
            Provide progress trackers and real-time updates to encourage donor participation </p>

        <div class="wf-product-cards__features">



    <h4 class="wf-product-cards__feature-list--heading ">Popular Features</h4>



          <div class="wf-product-cards__feature-list--items">
            <ul>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Event Galleries
              </li>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Collaborations and Partnerships
              </li>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Interactive Event Calendar
              </li>

            </ul>
          </div>
        </div>


        <div class="wf-product-cards__cta-wrapper">
















      <a class="
  cl-button -primary -medium wf-product-cards__cta homepage-operations" href="#" rel="noreferrer ">
        Learn more



      </a>





        </div>

      </div>
    </div>


    <div class="wf-product-cards__card cl-card -light -container-01 -hoverable "><div class="wf-product-cards__content">
        <div class="wf-product-cards__heading--wrapper">

          <img src="https://www.hubspot.com/hubfs/Product_Icon_Only_CommerceHub.svg" alt="" width="30" height="30" loading="lazy" class="wf-product-cards__heading--image">










    <h3 class="wf-product-cards__heading "style="font-family: 'Montserrat', sans-serif !important;">Financial Reports Feature:
        <span class="wf-product-cards__heading--trademark"></span></h3>



        </div>
        <p class="wf-product-cards__description"style="font-family: 'Montserrat', sans-serif !important;">The Financial Reports feature serves as a tool for transparency and accountability, providing stakeholders, donors, and the general public with a comprehensive overview of the foundation's financial health and how donated funds are utilized.</p>

        <div class="wf-product-cards__features">



    <h4 class="wf-product-cards__feature-list--heading ">Popular Features</h4>



          <div class="wf-product-cards__feature-list--items">
            <ul>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Annual Financial Statements
              </li>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Budget Allocations:
              </li>

              <li class="wf-product-cards__feature-list--item">
                <svg class="cl-icon" aria-hidden="true">
                  <use href="#check-circle" />
                </svg>
                Visual Representations:
              </li>

            </ul>
          </div>
        </div>


        <div class="wf-product-cards__cta-wrapper">
















      <a class="
  cl-button -primary -medium wf-product-cards__cta homepage-commerce" href="#" rel="noreferrer ">
        Learn more



      </a>





        </div>

      </div>
    </div>

    <div>
  </div>

    </div>
  </div></section>





</div>

<div id="hs_cos_wrapper_homepage_feature_spotlight" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">








<div id="homepage_feature_spotlight" class="wf-feature-spotlight -blue">
		<div class="wf-feature-spotlight-section-wrapper">
			<div class="wf-feature-spotlight-left-container">



    <h2 class="wf-feature-spotlight-heading "style="font-family: 'Montserrat', sans-serif !important;">Feature spotlight: Chikamadu Foundation</h2>



				<p class=""style="font-family: 'Montserrat', sans-serif !important;">
                    We aspire to instill hope, joy, and a sense of purpose in the lives of every child facing limb loss and their families.
				</p>
			</div>
			<div class="wf-feature-spotlight-right-container">







							<a href="#">
								Learn more



							</a>


			</div>
		</div>
	</div>



</div>

<div id="hs_cos_wrapper_homepage_use_cases_section_header" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">















  <section style="background-color: rgb(6, 6, 31);color:white;" id="homepage_use_cases_section_header" class="csol-section csol-section-header -white -padding-top-md -padding-bottom-s">
    <div class="csol-section-wrapper">












      <h2 class="csol-section-header-heading -white -large text-center">Education as Empowerment:</h2>







      <div class="csol-section-description cl-rich-text -white">
        <p class="text-white text-center" style="color: white;">Recognizing the transformative power of education, we have committed ourselves to providing learning opportunities that empower individuals to break free from the chains of poverty..</p>
      </div>




    </div>
  </section>


</div>

<div id="hs_cos_wrapper_homepage_use_cases" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">















  <section id="homepage_use_cases" class="csol-section csol-cta-cards -white -padding-top-xs -padding-bottom-md">
    <div class="csol-section-wrapper">


    <div class="csol-cta-cards-container">


          <div class="csol-cta-cards-card cl-card -light -container-01 -border">

              <img src="https://media.istockphoto.com/id/1442529985/photo/business-partners-in-meeting.webp?b=1&s=170667a&w=0&k=20&c=jJOruR74VemjhH9_C3o4sbpVevuMB99zNTymWq6FUfc=" width="567" height="454" loading="lazy" sizes="(max-width: 567px) 100vw, 567px">


            <div class="csol-cta-cards-card-content">

                <h3 class="csol-cta-cards-card-title h6 text-center">Nurturing Sustainable Communities</h3>



                <p class="csol-cta-cards-card-description">Beyond immediate relief, our foundation is dedicated to fostering sustainable communities. We believe in equipping individuals with the skills and resources needed to build a brighter future for themselves and generations to come.</p>


 <div class="csol-cta-cards-button">
                 <a class="
  cl-button -primary -medium -white homepage-use-case-prospects
" href="#" rel="noreferrer ">
      Learn more

        <span class="visually-hidden">about finding and engaging sales prospects</span>

    </a>






                  </div>




            </div>
          </div>



          <div class="csol-cta-cards-card cl-card -light -container-01 -border">

            <img src="https://media.istockphoto.com/id/1442529985/photo/business-partners-in-meeting.webp?b=1&s=170667a&w=0&k=20&c=jJOruR74VemjhH9_C3o4sbpVevuMB99zNTymWq6FUfc=" width="567" height="454" loading="lazy" sizes="(max-width: 567px) 100vw, 567px">


            <div class="csol-cta-cards-card-content">

                <h3 class="csol-cta-cards-card-title h6 text-center">Collaborative Philanthropy</h3>



                <p class="csol-cta-cards-card-description">We understand that the task of eradicating poverty is a collective endeavor. Chikamadu Charity Foundation actively seeks partnerships with like-minded individuals, organizations, and corporations to amplify our impact.</p>




                  <div class="csol-cta-cards-button">















    <a class="
  cl-button -primary -medium -white homepage-use-case-prospects
" href="#" rel="noreferrer ">
      Learn more

        <span class="visually-hidden">about finding and engaging sales prospects</span>

    </a>






                  </div>


            </div>
          </div>



          <div class="csol-cta-cards-card cl-card -light -container-01 -border">

              <img src="https://media.istockphoto.com/id/1455074391/photo/black-woman-man-and-writing-with-planning-strategy-and-development-of-company-growth-in.webp?b=1&s=170667a&w=0&k=20&c=AMzOgjqrvX_pgIKQldFKb7e8QvWSknxdBWJMHvUhKaY=" alt=""class="csol-cta-cards-card-image" width="567" height="454" loading="lazy"  sizes="(max-width: 567px) 100vw, 567px">


            <div class="csol-cta-cards-card-content">

                <h3 class="csol-cta-cards-card-title h6 text-center">Transparent and Accountable</h3>



                <p class="csol-cta-cards-card-description">Transparency is the cornerstone of our operations. We are committed to keeping our supporters informed about how their contributions are utilized, ensuring accountability at every step.</p>



                <div class="csol-cta-cards-button">















                    <a class="
                  cl-button -primary -medium -white homepage-use-case-prospects
                " href="#" rel="noreferrer ">
                      Learn more

                        <span class="visually-hidden">about finding and engaging sales prospects</span>

                    </a>






                                  </div>



            </div>
          </div>


    </div>


    </div>
  </section>


</div>



















  <section id="homepage_community" class="wf-section  -white -padding-top-lg -padding-bottom-lg">
    <div class="wf-section-wrapper">

<div class="wf-community">
	<div class="wf-community-heading-wrapper">



    <h2 class="wf-community-heading -white text-center ">Popular blog posts</h2>





				<a href="#" target="_blank" rel="noopener" class="wf-community-link cl-textLink -white -medium  homepage-blog">
				Explore the Chikamadu blog

					<span class="visually-hidden">Read more blog articles</span>

				</a>

	</div>
	<div class="blog-highlighted-posts">







  <ul class="blog-post-list ">

    <li class="blog-post-list-item">






  <div class="blog-post-card   ">

    <div class="blog-post-card-featured-image">
      <img src="https://media.istockphoto.com/id/1161334831/photo/3d-text-shape-news-against-wall-with-copyspace.webp?b=1&s=170667a&w=0&k=20&c=EkDUEyoRbXMn4LpD5hQzDLWDgbRz1tQHnGv3MUIiN5c=" alt="woman writing a LinkedIn summary on her laptop" width="602" height="300" aria-hidden="true" loading="lazy"  sizes="(max-width: 602px) 100vw, 602px">
    </div>

    <div class="blog-post-card-body">






    <h3 class="blog-post-card-title"> <a href="#" target="_blank">Join Us in Making a Difference...</a></h3>



      <div class="blog-post-card-footer">
        <p class="blog-post-card-author">Versatile153</p>
        <time class="blog-post-card-date" datetime="11/30/23">
          <span class="visually-hidden"></span>
          1/20/24
        </time>
      </div>
    </div>
  </div>

    </li>

    <li class="blog-post-list-item">






  <div class="blog-post-card   ">

    <div class="blog-post-card-featured-image">
      <img src="https://media.istockphoto.com/id/1301630868/photo/boys-playing-video-games-on-computer-while-vlogging.webp?b=1&s=170667a&w=0&k=20&c=W4-9lH-JmruqQo2W0T357bF4r7vslh4DzjWWHS-HMDg=" alt="woman trains chatgpt so it learns her brand voice" width="602" height="300" aria-hidden="true" loading="lazy"  sizes="(max-width: 602px) 100vw, 602px">
    </div>

    <div class="blog-post-card-body">






    <h3 class="blog-post-card-title"> <a href="#" target="_blank">How to Train Your ChatGPT — A Marketer’s Guide</a></h3>



      <div class="blog-post-card-footer">
        <p class="blog-post-card-author">An Vora</p>
        <time class="blog-post-card-date" datetime="11/7/23">
          <span class="visually-hidden"></span>
          1/7/24
        </time>
      </div>
    </div>
  </div>

    </li>

    <li class="blog-post-list-item">






  <div class="blog-post-card   ">

    <div class="blog-post-card-featured-image">
      <img src="https://media.istockphoto.com/id/1438623716/photo/black-woman-with-laptop-reading-typing-and-working-for-online-digital-newspaper-marketing-or.webp?b=1&s=170667a&w=0&k=20&c=l6JsW73GP3gWBLPDEdYbDmp-exPW02MRWpjpEzdPjLg=" alt="top ai-generated content types" width="602" height="300" aria-hidden="true" loading="lazy"  sizes="(max-width: 602px) 100vw, 602px">
    </div>

    <div class="blog-post-card-body">






    <h3 class="blog-post-card-title"> <a href="#" target="_blank">Make a Difference Today. Empower Lives Tomorrow.</a></h3>



      <div class="blog-post-card-footer">
        <p class="blog-post-card-author">Lord Taylor</p>
        <time class="blog-post-card-date" datetime="1/10/24">
          <span class="visually-hidden"></span>
          1/10/24
        </time>
      </div>
    </div>
  </div>

    </li>

    <li class="blog-post-list-item">






  <div class="blog-post-card   ">

    <div class="blog-post-card-featured-image">
      <img src="https://media.istockphoto.com/id/687810706/photo/whats-new.webp?b=1&s=170667a&w=0&k=20&c=RsAUNxP4ZH7hfESmgwQUDFdEGjpcJDjOww3m986XohE=" alt="modern millie's four step process to content creation" width="602" height="300" aria-hidden="true" loading="lazy" sizes="(max-width: 602px) 100vw, 602px">
    </div>

    <div class="blog-post-card-body">






    <h3 class="blog-post-card-title"> <a href="#" target="_blank">. Education as Empowerment..</a></h3>



      <div class="blog-post-card-footer">
        <p class="blog-post-card-author">Modern Millie</p>
        <time class="blog-post-card-date" datetime="10/30/23">
          <span class="visually-hidden"></span>
          01/30/24
        </time>
      </div>
    </div>
  </div>

    </li>

  </ul>

	</div>
</div>

    </div>
  </section>

</div>

<div id="hs_cos_wrapper_homepage_link_to_content" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">




















  </div>

<div id="hs_cos_wrapper_homepage_cta_content_block" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">









  <section id="homepage_cta_content_block" class="csol-section csol-cta-content-block - -white -padding-top-md -padding-bottom-md">
    <div class="csol-section-wrapper">


    <div class="csol-cta-content-block-container">
      <div class="csol-cta-content-block-content">



      <h2 class="csol-cta-content-block-header text-center">Our Founding Mission: Empowering Through Compassion</h2>



        <p class="csol-cta-content-block-description"></p>

        <div class="csol-cta-content-block-buttons">

            <div class="csol-cta-content-block-button">















    <a class="
  cl-button -primary -large -white homepage-bottom
" href="#" rel="noreferrer ">
      Get a demo



    </a>






            </div>

            <div class="csol-cta-content-block-button">















    <a class="
  cl-button -secondary -large -white homepage-bottom2
" href="#" rel="noreferrer ">
    Donate now



    </a>






            </div>

        </div></div>



      <div class="csol-cta-content-block-image">
        <img src="https://media.istockphoto.com/id/525366712/photo/confident-black-business-man.webp?b=1&s=170667a&w=0&k=20&c=-luHgzqhjL6m2Im7AnHAv4V5rU50OrSHH4BoQBCN-Co=" alt=""  class="" width="340" height="346" loading="lazy"  sizes="(max-width: 340px) 100vw, 340px">
      </div>
    </div>


    </div>
  </section>


</div>

{{-- @endforeach --}}
@endsection
