<?php 
    include ("header.php");
    include('endsession.php');
?>
     
        <div class="container">
    <div class="page-header">
        <h3 class="section__title-center about__title">INTJ</h3>
    </div>


        <section class="accordion">
            <div class="accordion__container">
                <div class="accordion__item">
                    <header class="accordion__header">
                        <i class='bx bx-plus accordion__icon'></i>
                        <h3 class="accordion__title">What's an INTJ?</h3>
                    </header>
    
                    <div class="accordion__content">
                        <p class="accordion__description">
                            An Architect (INTJ) is a person with the Introverted, Intuitive, Thinking, and Judging personality traits. These thoughtful tacticians love perfecting the details of life, applying creativity and rationality to everything they do. Their inner world is often a private, complex one.
                    </div>
                </div>

                <div class="accordion__item">
                    <header class="accordion__header">
                        <i class='bx bx-plus accordion__icon'></i>
                        <h3 class="accordion__title">Strengths & Weaknesses</h3>
                    </header>
    
                    <div class="accordion__content">
                        <p class="accordion__description">
                            Strenghts: Rational, informed, independent, determined, curious, original <br>
                            Weaknesses: Arrogant, dismissive of emotions, overly critical, combative, socially clueless
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
                            INTJs are best suited to careers that allow them to use their logical, orderly reasoning to solve interesting problems. The common theme for satisfied INTJs, however, is that they must be in a career that provides an intellectual challenge. Top careers for the INTJ include: <br>

Financial Analyst, Logistician,
Management Consultant,
Mathematician,
Statistician,
Architect,
Computer Hardware Engineer,
Mechanical Engineer,
Computer Programmer,
Computer Systems Analyst,
Network Administrator,
Software Developer,
Computer and IS Manager,
Computer Scientist,
Writer
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
                            Sharp-witted and darkly funny, Architects (INTJs) aren’t everyone’s cup of tea – and they’re okay with that. For the most part, people with this personality type aren’t obsessed with being popular. They don’t spend their time and energy on just anyone, and they can be difficult to get to know.
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