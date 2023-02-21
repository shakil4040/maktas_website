import { createApp } from 'vue';
import * as VueRouter from 'vue-router';
import First from './components/First';
import Second from './components/Second';
import Enrolled from './components/Enrolled';
import New from './components/New';
import Student from './components/student/Student';
import Below4 from './components/student/Below4';
import Tree from './components/student/Tree';
import Language from './components/student/Language';
import Urdu from './components/student/Urdu';
import Urduexam from './components/student/Urduexam';
import Urduenglish from './components/student/Urduenglish';
import Jinahi1 from './components/student/Jinahi1';
import Jinahi2 from './components/student/Jinahi2';
import Jihaan from './components/student/Jihaan';
import Parent from './components/concerned parent/Parent';
import Score from './components/concerned parent/Score';
import Elmi from './components/concerned parent/Elmi';
import Amli from './components/concerned parent/Amli';
import Gauge from './components/concerned parent/Gauge';
import Elmi2 from './components/concerned parent/Elmi2';
import Amli2 from './components/concerned parent/Amli2';
import Jihaan3 from './components/concerned parent/Jihaan3';
import Jinahi3 from './components/concerned parent/Jinahi3';
import Sakhti from './components/concerned parent/Sakhti';
import Sakhti2 from './components/concerned parent/Sakhti2';
import Majbori from './components/concerned parent/Majbori';
import Website from './components/concerned parent/Website';
import Teacher from './components/teacher/Teacher';
import Online from './components/teacher/Online';
import Essay from './components/teacher/Essay';
import Tareeka from './components/teacher/Tareeka';
import Tareeka2 from './components/teacher/Tareeka2';
import Stats from './components/teacher/Stats';
import Pending from './components/teacher/Pending';
import Principal from './components/principal/Principal';
import Chart from './components/principal/Chart';
import Age15 from './components/age15/Age15';
import Kalma from './components/age15/Kalma';
import Rasool from './components/age15/Rasool';
import Invalid from './components/Invalid';

Vue.use(VueRouter);
export default new VueRouter({
    routes: [
        { path: '/', component: First },
        { path: '/second', component: Second },
        { path: '/enrolled', component: Enrolled },
        { path: '/new', component: New },
        { path: '/student', component: Student },
        { path: '/below4', component: Below4 },
        { path: '/tree', component: Tree },
        { path: '/language', component: Language },
        { path: '/urdu', component: Urdu },
        { path: '/urduexam', component: Urduexam },
        { path: '/urduenglish', component: Urduenglish },
        { path: '/jinahi1', component: Jinahi1 },
        { path: '/jinahi2', component: Jinahi2 },
        { path: '/jihaan', component: Jihaan },
        { path: '/parent', component: Parent },
        { path: '/score', component: Score },
        { path: '/elmi', component: Elmi },
        { path: '/amli', component: Amli },
        { path: '/gauge', component: Gauge },
        { path: '/elmi2', component: Elmi2 },
        { path: '/amli2', component: Amli2 },
        { path: '/jihaan3', component: Jihaan3 },
        { path: '/jinahi3', component: Jinahi3 },
        { path: '/sakhti', component: Sakhti },
        { path: '/sakhti2', component: Sakhti2 },
        { path: '/majbori', component: Majbori },
        { path: '/website', component: Website },
        { path: '/teacher', component: Teacher },
        { path: '/online', component: Online },
        { path: '/essay', component: Essay },
        { path: '/tareeka', component: Tareeka },
        { path: '/tareeka2', component: Tareeka2 },
        { path: '/stats', component: Stats },
        { path: '/pending', component: Pending },
        { path: '/principal', component: Principal },
        { path: '/chart', component: Chart },
        { path: '/age15', component: Age15 },
        { path: '/kalma', component: Kalma },
        { path: '/rasool', component: Rasool },
        { path: '/invalid', component: Invalid },
    ],
    mode: 'history'
});