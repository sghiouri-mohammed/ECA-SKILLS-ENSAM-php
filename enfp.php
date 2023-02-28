<?php include ("header.php");
?>
        <div class="container">
    <div class="page-header">
        <h3 class="section__title-center about__title">ENFP</h3>
    </div>



        <section class="accordion">
            <div class="accordion__container">
                <div class="accordion__item">
                    <header class="accordion__header">
                        <i class='bx bx-plus accordion__icon'></i>
                        <h3 class="accordion__title">What's an ENFP?</h3>
                    </header>
    
                    <div class="accordion__content">
                        <p class="accordion__description">
                           A Campaigner (ENFP) is someone with the Extraverted, Intuitive, Feeling, and Prospecting personality traits. These people tend to embrace big ideas and actions that reflect their sense of hope and goodwill toward others. Their vibrant energy can flow in many directions.
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
                            Strenghts: Curious, perceptive, enthusiastic, festive, good-natured <br>
                            Weaknesses: Unfocused, disorganized, overly optimistic, restless
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
                            Top careers for the ENFP include:<br>

Music Director or Composer,
Sales Manager,
Travel Agent,
Child Care Worker,
Psychologist,
Sociologist,
Public Relations Manager,
Reporter,
Writer or Author,
Art Director,
Interior Designer,
Landscape Architect,
Health Educator,
Rehabilitation Counselor,
Social Worker,
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
                            As friends, Campaigners (ENFPs) are cheerful and supportive. They’re nearly always up for a little lighthearted banter – or a deep, heartfelt, emotional discussion about anything and everything.

Generous and giving, Campaigners have much to offer in the realm of friendship. At times, however, they may struggle with a suspicion that they care more about their friends than their friends care about them – a suspicion that can leave these sociable, warmhearted personalities feeling more than a little lonely.
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
