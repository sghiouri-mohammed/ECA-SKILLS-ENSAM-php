<?php include ("header.php");
?>
        <div class="container">
    <div class="page-header">
        <h3 class="section__title-center about__title">ENTJ</h3>
    </div>



        <section class="accordion">
            <div class="accordion__container">
                <div class="accordion__item">
                    <header class="accordion__header">
                        <i class='bx bx-plus accordion__icon'></i>
                        <h3 class="accordion__title">What's an ENTJ?</h3>
                    </header>
    
                    <div class="accordion__content">
                        <p class="accordion__description">
                           A Commander (ENTJ) is someone with the Extraverted, Intuitive, Thinking, and Judging personality traits. They are decisive people who love momentum and accomplishment. They gather information to construct their creative visions but rarely hesitate for long before acting on them.
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
                            Strenghts:Efficient, energetic, self-confident, strong-willed, strategic thinker, inspiring <br>
                            Weaknesses: Stubborn, impatient, intolerant, cold, ruthless
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
                            Top careers for the ENTJ include:<br>
Financial Analyst,
Logistician,
Management Consultant or Analyst,
Architectural or Engineering Manager,
Compensation or Benefits Manager,
Agricultural Engineer,
Architect,
Civil Engineer,
Computer Hardware Engineer,
Electrical or Electronics Engineer,
Mechanical Engineer,
Computer Network Architect,
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
                           As in most aspects of their lives, in friendship Commanders seek personal growth and inspiration, and they often have a plan for how to accomplish it. Friendships of circumstance, built on things like shared routines, are not Commanders’ preferred method – rather, they pursue their friends, seek out individuals who share their passion for deep, meaningful discussions, and who enjoy learning and development as much as they do. It is not always easy to be Commanders’ friends – they demand a lot from these relationships – but they pay a great deal of attention to their friendships, and it is unlikely that it will ever feel stagnant.
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
