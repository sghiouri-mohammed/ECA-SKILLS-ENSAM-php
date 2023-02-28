<?php 
    include ("header.php");
?>
        <div class="container">
    <div class="page-header">
        <h3 class="section__title-center about__title">ENTP</h3>
    </div>


        <section class="accordion">
            <div class="accordion__container">
                <div class="accordion__item">
                    <header class="accordion__header">
                        <i class='bx bx-plus accordion__icon'></i>
                        <h3 class="accordion__title">What's an ENTP?</h3>
                    </header>
    
                    <div class="accordion__content">
                        <p class="accordion__description">
                          A Debater (ENTP) is a person with the Extraverted, Intuitive, Thinking, and Prospecting personality traits. They tend to be bold and creative, deconstructing and rebuilding ideas with great mental agility. They pursue their goals vigorously despite any resistance they might encounter.
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
                            Strenghts: Knowledgeable, original, charismatic, energetic <br>
                            Weaknesses: Insensitive, intolerant, very argumentative
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
                           Top careers for the ENTP include: <br>

Operations Research Analyst,
Graphic Designer,
Industrial Designer,
Animator,
Actor,
Composer
Musician or Singer,
Producer or Director,
Editor,
Translator,
Photographer,
Public Relations Specialist,
Lawyer
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
                           Loyalty, support, emotional feedback – these are not what Debaters look for in their friendships. The last thing people with the Debater personality type want to hear is “you’re right”, not unless they have absolutely earned the distinction in a heated round of intellectual debate. If they’re wrong, Debaters want to be told so, and they want every detail of the faults in their logic to be laid bare, partly in their quest for oftentimes arbitrary truth, and partly just so they have to work to defend that logic with counterpoint and parry.
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
