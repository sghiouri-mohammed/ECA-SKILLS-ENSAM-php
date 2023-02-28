<?php 
    include ("header.php");
    include('endsession.php');
?>
     
        <div class="container">
    <div class="page-header">
        <h3 class="section__title-center about__title">ESTP</h3>
    </div>


        <section class="accordion">
            <div class="accordion__container">
                <div class="accordion__item">
                    <header class="accordion__header">
                        <i class='bx bx-plus accordion__icon'></i>
                        <h3 class="accordion__title">What's an ESTP?</h3>
                    </header>
    
                    <div class="accordion__content">
                        <p class="accordion__description">
                          An Entrepreneur (ESTP) is someone with the Extraverted, Observant, Thinking, and Prospecting personality traits. They tend to be energetic and action-oriented, deftly navigating whatever is in front of them. They love uncovering life’s opportunities, whether socializing with others or in more personal pursuits.
                        </p>
                    </div>
                </div>

                <div class="accordion__item">
                    <header class="accordion__header">
                        <i class='bx bx-plus accordion__icon'></i>
                        <h3 class="accordion__title">Strengths & Weaknesses</h3>
                    </header>
    
                    <div class="accordion__content">
                        <p class="accordion__description">
                            Strenghts: Bold, rational and practical, original, perceptive, direct, sociable <br>
                            Weaknesses: Impatient, insensitive, risk-prone, unstructured, defiant
                        </p>
                    </div>
                </div>

                <div class="accordion__item">
                    <header class="accordion__header">
                        <i class='bx bx-plus accordion__icon'></i>
                        <h3 class="accordion__title">Career Paths</h3>
                    </header>
    
                    <div class="accordion__content">
                        <p class="accordion__description">
                            M
General Contractor,
Biologist,
Sales Engineer,
Chief Financial Officer,
Chief Information Officer,
Budget Analyst,
Financial Planner,
Airline Pilot,
Flight Engineer,
Civil Engineer,
Mechanical Engineer,
Restaurant Owner,
Chef,
Photographer

                        </p>
                    </div>
                </div>

                <div class="accordion__item">
                    <header class="accordion__header">
                        <i class='bx bx-plus accordion__icon'></i>
                        <h3 class="accordion__title">Friendships</h3>
                    </header>
    
                    <div class="accordion__content">
                        <p class="accordion__description">
                            People with the Entrepreneur personality type are definitely the life of the party. With an enviable imagination and invigorating sense of spontaneity, Entrepreneurs are never boring. They love exploring interesting ideas, both in discussion and by going out and seeing for themselves, which means that Entrepreneurs always seem to have some fun activity hidden up their sleeves. At the same time, Entrepreneur personalities are easy-going, tolerant, and charming, making them naturally quite popular.
                        </p>
                    </div>
                </div>
            </div>
        </section>












    </div>



        <script>
        const accordionItems = document.querySelectorAll('.accordion__item')

        accordionItems.forEach((item) =>{
            const accordionHeader = item.querySelector('.accordion__header')

            accordionHeader.addEventListener('click', () =>{

                const openItem = document.querySelector('.accordion-open')

                toggleItem(item)

                if(openItem && openItem!== item){
                    toggleItem(openItem)
                }
            })
        })

        const toggleItem = (item) =>{

            const accordionContent = item.querySelector('.accordion__content')


            if(item.classList.contains('accordion-open')){
                accordionContent.removeAttribute('style')
                item.classList.remove('accordion-open')
            }else{

                accordionContent.style.height = accordionContent.scrollHeight + 'px'
                item.classList.add('accordion-open')
            }
        }
        </script>


        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>


        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>


<?php include('footerI.php'); ?>