<?php 
    include ("header.php");
    include('endsession.php');
?>
     
        <div class="container">
    <div class="page-header">
        <h3 class="section__title-center about__title">INTP</h3>
    </div>


        <section class="accordion">
            <div class="accordion__container">
                <div class="accordion__item">
                    <header class="accordion__header">
                        <i class='bx bx-plus accordion__icon'></i>
                        <h3 class="accordion__title">What's an INTP?</h3>
                    </header>
    
                    <div class="accordion__content">
                        <p class="accordion__description">
                          A Virtuoso (ISTP) is someone with the Introverted, Observant, Thinking, and Prospecting personality traits. They tend to have an individualistic mindset, pursuing goals without needing much external connection. They engage in life with inquisitiveness and personal skill, varying their approach as needed.
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
                            Strenghts: Optimistic and Energetic, Creative and Practical, Spontaneous and Rational, Know How to Prioritize <br>
                            Weaknesses: Stubborn, Insensitive, Private and Reserved, Dislike Commitment
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
 
Mechanic,
Landscape Architect,
Photographer,
Securities Analyst,
Purchasing Agent,
Financial Manager,
Software Developer,
Systems Analyst,
Database Administrator,
Software Tester,
Property Manager,
Office Manage,
Criminalist,
Biologist,
Geologist,
Civil Engineer,
Mechanical Engineer,
Electrical Engineer
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
                            When it comes to friendships, Virtuosos seem made for Bushnell’s Law of game design: Easy to learn, difficult to master. With their well-rounded and interesting array of hobbies, people with the Virtuoso personality type have no trouble at all making acquaintances to share their activities with. It’s getting beneath the surface to become Virtuosos’ true friends that is the real challenge, leaving them with a lot of good will and friendly faces to call on, but only a few people who they feel truly understand them.
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