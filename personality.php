<?php 
    include ("header.php");
    include('endsession.php');
?>

<div class="container text-center" >
    <div class="page-header">
        <h2 class="section__title-center about__title" >MBTI Personality Type Test</h2>
    </div>
        <p>
            The following test is designed to measure your MBTI Personality type. <br>
            x There are no right answers to any of these questions. <br>
            x Answer the questions quickly, do not over-analyze them. Some seem worded
            poorly. Go with what feels best. <br>
            x Answer the questions as “the way you are”, not “the way you’d like to be seen by
            others” <br> 
    </p>

    <ol style="margin-top: 50px;">

        <li id="Section1" ><strong>1. At an event, do you:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q1" value="e">
                    Interact with many, including strangers
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q1" value="i">
                    Interact with a few, known to you
                </label>
            </div>
            <button onclick="show('Section2');">Suivant</button>
        </li>

        <li style="display:none;" id="Section2"><strong>2. Are you more:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q2" value="s">
                    Realistic than speculative
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q2" value="n">
                    Speculative than realistic
                </label>
            </div>
            <button onclick="show('Section3');">Suivant</button>
        </li>

        <li style="display:none;" id="Section3"><strong>3. Do you like to:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q3" value="s">
                    Do (make)
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q3" value="n">
                    Dream (design)
                </label>
            </div>
            <button onclick="show('Section4');">Suivant</button>

        </li>

        <li style="display:none;" id="Section4"><strong>4. Are you more impressed by:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q4" value="t">
                    Principles
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q4" value="f">
                    Emotions
                </label>
            </div>
            <button onclick="show('Section5');">Suivant</button>
        </li>

        <li style="display: none;" id="Section5"><strong>5. Are more drawn toward the:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q5" value="t">
                    Convincing
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q5" value="f">
                    Touching
                </label>
            </div>
            <button onclick="show('Section6');">Suivant</button>
        </li>

        <li style="display: none;" id="Section6"><strong>6. Do you prefer to work:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q6" value="j">
                    To deadlines
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q6" value="p">
                    Just “whenever”
                </label>
            </div>
            <button onclick="show('Section7');">Suivant</button>

        </li>

        <li style="display: none;" id="Section7"><strong>7. Do you tend to choose:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q7" value="j">
                    Rather carefully
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q7" value="p">
                    Somewhat impulsively
                </label>
            </div>
            <button onclick="show('Section8');">Suivant</button>

        </li>

        <li style="display: none;" id="Section8"><strong>8. At parties do you:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q8" value="e">
                    Stay late, with increasing energy
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q8" value="i">
                    Leave early with decreased energy
                </label>
            </div>
            <button onclick="show('Section9');">Suivant</button>

        </li>

        <li style="display: none;" id="Section9"><strong>9. Are you more attracted to:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q9" value="s">
                    Sensible people
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q9" value="n">
                    Imaginative people
                </label>
            </div>
            <button onclick="show('Section10');">Suivant</button>
        </li>

        <li style="display: none;" id="Section10"><strong>10. Are you more interested in:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q10" value="s">
                    What is actual
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q10" value="n">
                    What is possible
                </label>
            </div>
            <button onclick="show('Section11');">Suivant</button>
        </li>

        <li style="display: none;" id="Section11"><strong>11. In judging others are you more swayed by:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q11" value="t">
                    Laws than circumstances
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q11" value="f">
                    Circumstances than laws
                </label>
            </div>
            <button onclick="show('Section12');">Suivant</button>
        </li>

        <li style="display: none;" id="Section12"><strong>12. In approaching others is your inclination to be somewhat:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q12" value="t">
                    Objective
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q12" value="f">
                    Personal
                </label>
            </div>
            <button onclick="show('Section13');">Suivant</button>
        </li>

        <li style="display: none;" id="Section13"><strong>13. Are you more:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q13" value="j">
                    Punctual
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q13" value="p">
                    Leisurely
                </label>
            </div>
            <button onclick="show('Section14');">Suivant</button>
        </li>

        <li style="display: none;" id="Section14"><strong>14. Does it bother you more having things:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q14" value="j">
                    Incomplete
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q14" value="p">
                    Completed
                </label>
            </div>
            <button onclick="show('Section15');">Suivant</button>
        </li>

        <li style="display: none;" id="Section15"><strong>15. In your social groups do you:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q15" value="e">
                    Keep abreast of other’s happenings
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q15" value="i">
                    Get behind on the news
                </label>
            </div>
            <button onclick="show('Section16');">Suivant</button>
        </li>

        <li style="display: none;" id="Section16"><strong>16. In doing ordinary things are you more likely to:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q16" value="s">
                    Do it the usual way
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q16" value="n">
                    Do it your own way
                </label>
            </div>
            <button onclick="show('Section17');">Suivant</button>
        </li>

        <li style="display: none;" id="Section17"><strong>17. Writers should:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q17" value="s">
                    Say what they mean and mean what they say
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q17" value="n">
                    Express things more by use of analogy
                </label>
            </div>
            <button onclick="show('Section18');">Suivant</button>
        </li>

        <li style="display: none;" id="Section18"><strong>18. Which appeals to you more:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q18" value="t">
                    Consistency of thought
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q18" value="f">
                    Harmonious human relationships
                </label>
            </div>
            <button onclick="show('Section19');">Suivant</button>
        </li>

        <li style="display: none;" id="Section19"><strong>19. Are you more comfortable in making:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q19" value="t">
                    Logical judgments
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q19" value="f">
                    Value judgments
                </label>
            </div>
                <button onclick="show('Section20');">Suivant</button>
        </li>

        <li style="display: none;" id="Section20"><strong>20. Do you want things:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q20" value="j">
                    Settled and decided
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q20" value="p">
                    Unsettled and undecided
                </label>
            </div>
                <button onclick="show('Section21');">Suivant</button>
        </li>

        <li style="display: none;" id="Section21"><strong>21. Would you say you are more:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q21" value="j">
                    Serious and determined
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q21" value="p">
                    Easy-going
                </label>
            </div>
                <button onclick="show('Section22');">Suivant</button>
        </li>

        <li style="display: none;" id="Section22"><strong>22. In phoning do you:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q22" value="e">
                    Rarely question that it will all be said
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q22" value="i">
                    Rehearse what you’ll say
                </label>
            </div>
                <button onclick="show('Section23');">Suivant</button>
        </li>

        <li style="display: none;" id="Section23"><strong>23. Facts:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q23" value="s">
                    Speak for themselves
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q23" value="n">
                    Illustrate principles
                </label>
            </div>
                <button onclick="show('Section24');">Suivant</button>
        </li>

        <li style="display: none;" id="Section24"><strong>24. Are visionaries:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q24" value="s">
                    somewhat annoying
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q24" value="n">
                    rather fascinating
                </label>
            </div>
                <button onclick="show('Section25');">Suivant</button>
        </li>

        <li style="display: none;" id="Section25"><strong>25. Are you more often:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q25" value="t">
                    a cool-headed person
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q25" value="f">
                    a warm-hearted person
                </label>
            </div>
                <button onclick="show('Section26');">Suivant</button>
        </li>

        <li style="display: none;" id="Section26"><strong>26. Is it worse to be:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q26" value="t">
                    unjust
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q26" value="f">
                    merciless
                </label>
            </div>
                <button onclick="show('Section27');">Suivant</button>
        </li>

        <li style="display: none;" id="Section27"><strong>27. Should one usually let events occur:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q27" value="j">
                    by careful selection and choice
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q27" value="p">
                    randomly and by chance
                </label>
            </div>
                <button onclick="show('Section28');">Suivant</button>
        </li>

        <li style="display: none;" id="Section28"><strong> 28. Do you feel better about:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q28" value="j">
                    having purchased
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q28" value="p">
                    having the option to buy
                </label>
            </div>
                <button onclick="show('Section29');">Suivant</button>
        </li>

        <li style="display: none;" id="Section29"><strong>29. In company do you:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q29" value="e">
                    initiate conversation
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q29" value="i">
                    wait to be approached
                </label>
            </div>
                <button onclick="show('Section30');">Suivant</button>
        </li>

        <li style="display: none;" id="Section30"><strong>30. Common sense is:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q30" value="s">
                    rarely questionable
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q30" value="n">
                    frequently questionable
                </label>
            </div>
                <button onclick="show('Section31');">Suivant</button>
        </li>

        <li style="display: none;" id="Section31"><strong>31. Children often do not:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q31" value="s">
                    make themselves useful enough
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q31" value="n">
                    exercise their fantasy enough
                </label>
            </div>
                <button onclick="show('Section32');">Suivant</button>
        </li>

        <li style="display: none;" id="Section32"><strong>32. In making decisions do you feel more comfortable with:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q32" value="t">
                    standards
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q32" value="f">
                    feelings
                </label>
            </div>
                <button onclick="show('Section33');">Suivant</button>
        </li>

        <li style="display: none;" id="Section33"><strong>33. Are you more:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q33" value="t">
                    firm than gentle
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q33" value="f">
                    gentle than firm
                </label>
            </div>
                <button onclick="show('Section34');">Suivant</button>
        </li>

        <li style="display: none;" id="Section34"><strong>34. Which is more admirable:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q34" value="j">
                    the ability to organize and be methodical
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q34" value="p">
                    the ability to adapt and make do
                </label>
            </div>
                <button onclick="show('Section35');">Suivant</button>
        </li>

        <li style="display: none;" id="Section35"><strong>35. Do you put more value on:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q35" value="j">
                    infinite
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q35" value="p">
                    open-minded
                </label>
            </div>
                <button onclick="show('Section36');">Suivant</button>
        </li>

        <li style="display: none;" id="Section36"><strong>36. Does new and non-routine interaction:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q36" value="e">
                    stimulate and energize you
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q36" value="i">
                    tax your reserves
                </label>
            </div>
                <button onclick="show('Section37');">Suivant</button>
        </li>

        <li style="display: none;" id="Section37"><strong>37. Are you more frequently:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q37" value="s">
                    a practical sort of person
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q37" value="n">
                    a fanciful sort of person
                </label>
            </div>
                <button onclick="show('Section38');">Suivant</button>
        </li>

        <li style="display: none;" id="Section38"><strong>38. Are you more likely to:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q38" value="s">
                    see how others are useful
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q38" value="n">
                    see how others see
                </label>
            </div>
                <button onclick="show('Section39');">Suivant</button>
        </li>

        <li style="display: none;" id="Section39"><strong>39. Which is more satisfying:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q39" value="t">
                    to discuss an issue thoroughly
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q39" value="f">
                    to arrive at agreement on an issue
                </label>
            </div>
            <button onclick="show('Section40');"> Suivant </button>

        </li>


        <li style="display: none;" id="Section40"><strong>40. Which rules you more:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q40" value="t">
                    your head
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q40" value="f">
                    your heart
                </label>
            </div>
            <button onclick="show('Section41');" class="btn-test-nbti"> Suivant </button>
        </li>

        <li style="display: none;" id="Section41"><strong>41. Are you more comfortable with work that:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q41" value="j">
                    contracted
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q41" value="p">
                    done on a casual basis
                </label>
            </div>
            <button onclick="show('Section42');" class="btn-test-nbti"> Suivant </button>
        </li>


        <li style="display: none;" id="Section42"><strong>42. Do you tend to look for:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q42" value="j">
                    the orderly
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q42" value="p">
                    whatever turns up
                </label>
            </div>
                <button onclick="show('Section43');">Suivant</button>
        </li>

        <li style="display: none;" id="Section43"><strong>43. Do you prefer:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q43" value="e">
                    many friends with brief contact
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q43" value="i">
                    a few friends with more lengthy contact
                </label>
            </div>
                <button onclick="show('Section44');">Suivant</button>
        </li>

        <li style="display: none;" id="Section44"><strong>44. Do you go more by:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q44" value="s">
                    facts
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q44" value="n">
                    principles
                </label>
            </div>
                <button onclick="show('Section45');">Suivant</button>
        </li>

        <li style="display: none;" id="Section45"><strong>45. Are you more interested in:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q45" value="s">
                    production and distribution
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q45" value="n">
                    design and research
                </label>
            </div>
                <button onclick="show('Section46');">Suivant</button>
        </li>

        <li style="display: none;" id="Section46"><strong>46. Which is more of a compliment:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q46" value="t">
                    “There is a very logical person.”
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q46" value="f">
                    “There is a very sentimental person.”
                </label>
            </div>
                <button onclick="show('Section47');">Suivant</button>
        </li>

        <li style="display: none;" id="Section47"><strong>47. Do you value in yourself more that you are:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q47" value="t">
                    unwavering
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q47" value="f">
                    devoted
                </label>
            </div>
                <button onclick="show('Section48');">Suivant</button>
        </li>

        <li style="display: none;" id="Section48"><strong>48. Do you more often prefer the:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q48" value="j">
                    final and unalterable statement
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q48" value="p">
                    tentative and preliminary statement
                </label>
            </div>
                <button onclick="show('Section49');">Suivant</button>
        </li>

        <li style="display: none;" id="Section49"><strong>49. Are you more comfortable:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q49" value="j">
                    after a decision
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q49" value="p">
                    before a decision
                </label>
            </div>
                <button onclick="show('Section50');">Suivant</button>
        </li>

        <li style="display: none;" id="Section50"><strong>50. Do you:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q50" value="e">
                    speak easily and at length with strangers
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q50" value="i">
                    find little to say to strangers
                </label>
            </div>
                <button onclick="show('Section51');">Suivant</button>
        </li>

        <li style="display: none;" id="Section51"><strong>51. Are you more likely to trust your:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q51" value="s">
                    experience
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q51" value="n">
                    hunch
                </label>
            </div>
                <button onclick="show('Section52');">Suivant</button>
        </li>

        <li style="display: none;" id="Section52"><strong>52. Do you feel:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q52" value="s">
                    more practical than ingenious
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q52" value="n">
                    more ingenious than practical
                </label>
            </div>
                <button onclick="show('Section53');">Suivant</button>
        </li>

        <li style="display: none;" id="Section53"><strong>53. Which person is more to be complimented &ndash; one of:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q53" value="t">
                    clear reason
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q53" value="f">
                    strong feeling
                </label>
            </div>
                <button onclick="show('Section54');">Suivant</button>
        </li>



        <li style="display: none;" id="Section54"><strong>54. Are you inclined more to be:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q54" value="t">
                    fair-minded
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q54" value="f">
                    sympathetic
                </label>
            </div>
                <button onclick="show('Section55');">Suivant</button>
        </li>

        <li style="display: none;" id="Section55"><strong>55. Is it preferable mostly to:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q55" value="j">
                    make sure things are arranged
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q55" value="p">
                    just let things happen
                </label>
            </div>
                <button onclick="show('Section56');">Suivant</button>
        </li>

        <li style="display: none;" id="Section56"><strong>56. In relationships should most things be:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q56" value="j">
                    re-negotiable
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q56" value="p">
                    random and circumstantial
                </label>
            </div>
                <button onclick="show('Section57');">Suivant</button>
        </li>

        <li style="display: none;" id="Section57"><strong>57. When the phone rings do you:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q57" value="e">
                    hasten to get to it first
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q57" value="i">
                    hope someone else will answer
                </label>
            </div>
                <button onclick="show('Section58');">Suivant</button>
        </li>

        <li style="display: none;" id="Section58"><strong>58. Do you prize more in yourself:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q58" value="s">
                    a strong sense of reality
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q58" value="n">
                    a vivid imagination
                </label>
            </div>
                <button onclick="show('Section59');">Suivant</button>
        </li>

        <li style="display: none;" id="Section59"><strong>59. Are you drawn more to:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q59" value="s">
                    fundamentals
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q59" value="n">
                    overtones
                </label>
            </div>
                <button onclick="show('Section60');">Suivant</button>
        </li>

        <li style="display: none;" id="Section60"><strong>60. Which seems the greater error:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q60" value="t">
                    to be too passionate
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q60" value="f">
                    to be too objective
                </label>
            </div>
                <button onclick="show('Section61');">Suivant</button>
        </li>

        <li style="display: none;" id="Section61"><strong>61. Do you see yourself as basically:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q61" value="t">
                    hard-headed
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q61" value="f">
                    soft-hearted
                </label>
            </div>
                <button onclick="show('Section62');">Suivant</button>
        </li>

        <li style="display: none;" id="Section62"><strong>Which situation appeals to you more:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q62" value="j">
                    the structured and scheduled
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q62" value="p">
                    the unstructured and unscheduled
                </label>
            </div>
                <button onclick="show('Section63');">Suivant</button>
        </li>

        <li style="display: none;" id="Section63"><strong>Are you a person that is more:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q63" value="j">
                    routinized than whimsical
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q63" value="p">
                    whimsical than routinized
                </label>
            </div>
                <button onclick="show('Section64');">Suivant</button>
        </li>

        <li style="display: none;" id="Section64"><strong>Are you more inclined to be:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q64" value="e">
                    easy to approach
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q64" value="i">
                    somewhat reserved
                </label>
            </div>
                <button onclick="show('Section65');">Suivant</button>
        </li>

        <li style="display: none;" id="Section65"><strong>In writings do you prefer:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q65" value="s">
                    the more literal
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q65" value="n">
                    the more figurative
                </label>
            </div>
                <button onclick="show('Section66');">Suivant</button>
        </li>

        <li style="display: none;" id="Section66"><strong>Is it harder for you to:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q66" value="s">
                    identify with others
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q66" value="n">
                    utilize others
                </label>
            </div>
                <button onclick="show('Section67');">Suivant</button>
        </li>

        <li style="display: none;" id="Section67"><strong>Which do you wish more for yourself:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q67" value="t">
                    clarity of reason
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q67" value="f">
                    strength of compassion
                </label>
            </div>
                <button onclick="show('Section68');">Suivant</button>
        </li>

        <li style="display: none;" id="Section68"><strong>Which is the greater fault:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q68" value="t">
                    being indiscriminate
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q68" value="f">
                    being critical
                </label>
            </div>
                <button onclick="show('Section69');">Suivant</button>
        </li>

        <li style="display: none;" id="Section69"><strong>Do you prefer the:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q69" value="j">
                    planned event
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q69" value="p">
                    unplanned event
                </label>
            </div>
                <button onclick="show('Section70');">Suivant</button>
        </li>

        <li style="display: none;" id="Section70"><strong>Do you tend to be more:</strong><br>
            <div class="radio">
                <label>
                    <input type="radio" name="q70" value="j">
                    deliberate than spontaneous
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="q70" value="p">
                    spontaneous than deliberate
                </label>
            </div>
            

        </li>

    </ol>


    <div id="results" class="text-center hidden">
        <br><br>
        <h2 id="type"></h2>
        <p id="type-details" class="type-description hidden">
            <strong id="type-title"></strong><br>
            <br>
            <strong><span id="type-percentage"></span> of population</strong><br>
            <span id="type-description"></span><br>
        </p>
        <p style="margin-top: 20px;" class="pull-left"><span class="badge">Extraversion</span> (<span id="eScore"></span>%)</p>
        <p class="pull-right">(<span id="iScore"></span>%) <span class="badge">Introversion</span></p>
        <div class="progress">
            <div id="eiChart" class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
            <div class="center-bar"></div>
        </div>
        <br class="clearfix">
        
        <p class="pull-left"><span class="badge">Sensing</span> (<span id="sScore"></span>%)</p>
        <p class="pull-right">(<span id="nScore"></span>%) <span class="badge">iNtuition</span></p>
        <div class="progress">
            <div id="snChart" class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
            <div class="center-bar"></div>
        </div>
        <br class="clearfix">
        
        <p class="pull-left"><span class="badge">Thinking</span> (<span id="tScore"></span>%)</p>
        <p class="pull-right">(<span id="fScore"></span>%) <span class="badge">Feeling</span></p>
        <div class="progress">
            <div id="tfChart" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
            <div class="center-bar"></div>
        </div>
        <br class="clearfix">
        
        <p class="pull-left"><span class="badge">Judging</span> (<span id="jScore"></span>%)</p>
        <p class="pull-right">(<span id="pScore"></span>%) <span class="badge">Perceiving</span></p>
        <div class="progress">
            <div id="jpChart" class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
            <div class="center-bar"></div>
        </div>
        <br class="clearfix">
    </div>
    <a class="btn btn-primary btn-lg button button--flex" style="margin-top: 20px;" href="learnmore.php">Learn more <i class="ri-arrow-right-down-line button__icon"></i></a>
</div>


        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>


<script>
    const MbtiModule = (function() {
    let types = {
        ISTJ: {title: "The Traditionalist", percentage: "13.7%", description: "Dutiful, Practical, Logical, Methodical"},
        ISFJ: {title: "The Protector", percentage: "12.7%", description: "Dutiful, Practical, Supportive, Meticulous"},
        INFJ: {title: "The Guide", percentage: "1.7%", description: "Devoted, Innovative, Idealistic, Compassionate"},
        INTJ: {title: "The Visionary", percentage: "1.4%", description: "Independent, Innovative, Analytical, Purposeful"},
        ISTP: {title: "The Problem-Solver", percentage: "6.4%", description: "Expedient, Practical, Objective, Adaptable"},
        ISFP: {title: "The Harmonizer", percentage: "6.1%", description: "Tolerant, Realistic, Harmonious, Adaptable"},
        INFP: {title: "The Humanist", percentage: "3.2%", description: "Insightful, Innovative, Idealistic, Adaptable"},
        INTP: {title: "The Conceptualizer", percentage: "2.4%", description: "Questioning, Innovative, Objective, Abstract"},
        ESTP: {title: "The Activist", percentage: "5.8%", description: "Energetic, Practical, Pragmatic, Spontaneous"},
        ESFP: {title: "The Fun-Lover", percentage: "8.7%", description: "Spontaneous, Practical, Friendly, Harmonious"},
        ENFP: {title: "The Enthusiast", percentage: "6.3%", description: "Optimistic, Innovative, Compassionate, Versatile"},
        ENTP: {title: "The Entrepreneur", percentage: "2.8%", description: "Risk-Taking, Innovative, Outgoing, Adaptable"},
        ESTJ: {title: "The Coordinator", percentage: "10.4%", description: "Organized, Practical, Logical, Outgoing"},
        ESFJ: {title: "The Supporter", percentage: "12.6%", description: "Friendly, Practical, Loyal, Organized"},
        ENFJ: {title: "The Developer", percentage: "2.8%", description: "Friendly, Innovative, Supportive, Idealistic"},
        ENTJ: {title: "The Reformer", percentage: "2.9%", description: "Determined, Innovative, Strategic, Outgoing"}
    };
    let e, i, s, n, t, f, j, p;
    let type;
    
    function resetScores() {
        e = i = s = n = t = f = j = p = 0;
        type = "";
    }
    
    function getScores() {
        const inputs = document.getElementsByTagName("input");
        Array.prototype.forEach.call(inputs, function(input) {
            if (input.checked) {
                switch(input.value) {
                    case 'e': e++; break;
                    case 'i': i++; break;
                    case 's': s++; break;
                    case 'n': n++; break;
                    case 't': t++; break;
                    case 'f': f++; break;
                    case 'j': j++; break;
                    case 'p': p++; break;
                }
            }
        });
    }
    
    function calculatePercentages() {
        e = Math.floor(e / 10 * 100);
        i = Math.floor(i / 10 * 100);
        s = Math.floor(s / 20 * 100);
        n = Math.floor(n / 20 * 100);
        t = Math.floor(t / 20 * 100);
        f = Math.floor(f / 20 * 100);
        j = Math.floor(j / 20 * 100);
        p = Math.floor(p / 20 * 100);
    }
    
    function createCharts() {
        document.querySelector("#eScore").innerHTML = e;
        document.querySelector("#iScore").innerHTML = i;
        document.querySelector("#sScore").innerHTML = s;
        document.querySelector("#nScore").innerHTML = n;
        document.querySelector("#tScore").innerHTML = t;
        document.querySelector("#fScore").innerHTML = f;
        document.querySelector("#jScore").innerHTML = j;
        document.querySelector("#pScore").innerHTML = p;
        
        document.querySelector("#eiChart").style.marginLeft = i / 2 + "%";
        document.querySelector("#snChart").style.marginLeft = n / 2 + "%";
        document.querySelector("#tfChart").style.marginLeft = f / 2 + "%";
        document.querySelector("#jpChart").style.marginLeft = p / 2 + "%";
    }
    
    function showResults() {
        type += (e >= i) ? "E" : "I";
        type += (s >= n) ? "S" : "N";
        type += (t >= f) ? "T" : "F";
        type += (j >= p) ? "J" : "P";
        document.querySelector("#type").innerHTML = type;
        document.querySelector("#type-title").innerHTML = types[type].title;
        document.querySelector("#type-percentage").innerHTML = types[type].percentage;
        document.querySelector("#type-description").innerHTML = types[type].description;
        document.querySelector("#type-site").href = types[type].site;
        
        document.querySelector("#type-details").classList.remove("hidden");
        document.querySelector("#scroll-down").classList.remove("hidden");
        document.querySelector("#results").classList.remove("hidden");
    }
    
    return {
        processForm: function() {
            resetScores();
            getScores();
            calculatePercentages();
            createCharts();
            showResults();
        }
    };
})();

document.querySelector("#submit").addEventListener("click", function() { MbtiModule.processForm(); });
</script>
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
    <script type="text/javascript">
      var divs = ["Section1","Section2","Section3","Section4","Section5","Section6","Section7","Section8","Section9","Section10",
                    "Section11","Section12","Section13","Section14","Section15","Section16","Section17","Section18","Section19","Section20",
                    "Section21","Section22","Section23","Section24","Section25","Section26","Section27","Section28","Section29","Section30",
                    "Section31","Section32","Section33","Section34","Section35","Section36","Section37","Section38","Section39","Section40",
                    "Section41","Section42","Section43","Section44","Section45","Section46","Section47","Section48","Section49","Section50",
                    "Section51","Section52","Section53","Section54","Section55","Section56","Section57","Section58","Section59","Section60",
                    "Section61","Section62","Section63","Section64","Section65","Section66","Section67","Section68","Section69",
                ];
      var visibleId = null;
      function show(id) {
        if(visibleId !== id) {
          visibleId = id;
        } 
        hide();
      }
      function hide() {
        var div, i, id;
        for(i = 0; i < divs.length; i++) {
          id = divs[i];
          div = document.getElementById(id);
          if(visibleId === id) {
            div.style.display = "block";
          } else {
            div.style.display = "none";
          }
        }
      }  
   </script>
</html>