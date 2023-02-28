<?php 
    include ("header.php");
    include('endsession.php');
?>
     
        <div class="container">
    <div class="page-header">
        <h3 class="section__title-center about__title">INFP</h3>
    </div>


        <section class="accordion">
            <div class="accordion__container">
                <div class="accordion__item">
                    <header class="accordion__header">
                        <i class='bx bx-plus accordion__icon'></i>
                        <h3 class="accordion__title">What's an INFP?</h3>
                    </header>
    
                    <div class="accordion__content">
                        <p class="accordion__description">
                           A Mediator (INFP) is someone who possesses the Introverted, Intuitive, Feeling, and Prospecting personality traits. These rare personality types tend to be quiet, open-minded, and imaginative, and they apply a caring and creative approach to everything they do.
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
                            Strenghts: Generous, empathetic,creative, open-minded <br>
                            Weaknesses: Unrealistic, unfocused, self-isolating, self-critical
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
                            Top careers for the INFP include: <br>
Multimedia Artist or Animator,
Editor,
Public Relations Specialist,
Writer,
Social Worker,
Human Resources Specialist,
Sociologist,
Veterinarian,
Professor or College Instructor,
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
                            When it comes to their social lives, Mediators (INFPs) may find themselves caught in a web of contradictions. People with this personality type crave alone time, but they’re also vulnerable to loneliness. They long to feel accepted and well-liked, but they hate the idea of pretending to be anyone but their authentic selves. And while they hesitate to draw attention to themselves, they don’t want to be invisible, either.
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