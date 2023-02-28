<?php 
    include ("header.php");
    include('endsession.php');
?>
     
        <div class="container">
    <div class="page-header">
        <h3 class="section__title-center about__title">ESFJ</h3>
    </div>


        <section class="accordion">
            <div class="accordion__container">
                <div class="accordion__item">
                    <header class="accordion__header">
                        <i class='bx bx-plus accordion__icon'></i>
                        <h3 class="accordion__title">What's an ESFJ?</h3>
                    </header>
    
                    <div class="accordion__content">
                        <p class="accordion__description">
                          A Consul (ESFJ) is a person with the Extraverted, Observant, Feeling, and Judging personality traits. They are attentive and people-focused, and they enjoy taking part in their social community. Their achievements are guided by decisive values, and they willingly offer guidance to others.
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
                            Strenghts: Strong Practical Skills, very loyal, open-Minded, Sensitive and Warm. <br>
                            Weaknesses: Worried about Their Social Status, inflexible, Vulnerable to Criticism, too selfless 
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
                            Elementary Teacher
Special Education Teacher,
School Administrator,
Counselor,
Social Worker,
Health Care Administrator,
Police Officer,
Minister,
Real Estate Agent,
Insurance Agent,
Merchandise Planner,
Advertising Sales Agent,
Office Manager,
Fundraiser,
Receptionist,
Customer Service Rep
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
                            Consuls are a very social personality type, seeking large circles of friends and proving themselves more than willing to spend the time and energy necessary to maintain these relationships. Loyal and warm, Consuls are known for standing by their friends no matter what, and providing a constant source of emotional support and encouragement.
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