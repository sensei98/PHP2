//importing highway
import Highway from '@dogstudio/highway';

//importing GSAP
import Tween from 'gsap';

class Fade extends Highway.Transition{
    //pages coming in
    in({from,to,done}){
        //remove old content
        from.remove();

        //animation
        Tween.fromTo(to, 0.5, {opacity:0}, {opacity:1,onComplete:done});
    }

    //pages going out
    out({from,done}){
        //animation
        Tween.fromTo(from, 0.5, {opacity:1}, {opacity:0,onComplete:done});
    }
}

//exporting fade class
export default Fade;
