import {createRouter, createWebHistory} from 'vue-router';
import Index from '../components/dashboard/Index'
import LeadsDashboard from '../components/dashboard/LeadsDashboard'
import ProjectsDashboard from '../components/dashboard/ProjectsDashboard'
import Activities from '../components/page/Activities'
import Blankpage from '../components/page/Blankpage'
import Companies from '../components/company/Companies'
import Components from '../components/component/Components'
import Contacts from '../components/page/Contacts'
import Datatables from '../components/tables/Datatables'
import DealsKanbanView from '../components/deals/DealsKanbanView'
import LeadsKanbanView from '../components/leads/LeadsKanbanView'
import Deals from '../components/deals/Deals'
import Email from '../components/mail/Email'
import Error404 from '../components/error/Error404'
import Error500 from '../components/error/Error500'
import Faq from '../components/page/Faq'
import FormBasicInputs from '../components/form/FormBasicInputs'
import FormHorizontal from '../components/form/FormHorizontal'
import FormInputGroups from '../components/form/FormInputGroups'
import FormMask from '../components/form/FormMask'
import FormValidation from '../components/form/FormValidation'
import FormVertical from '../components/form/FormVertical'
import Leads from '../components/leads/Leads'
import Login from '../components/page/Login'
import MailView from '../components/mail/MailView'
import PrivacyPolicy from '../components/page/PrivacyPolicy'
import Profile from '../components/page/Profile'
import Register from '../components/page/Register'
import ProjectsKanbanView from '../components/projects/ProjectsKanbanView'
import Projects from '../components/projects/Projects'
import Reports from '../components/page/Reports'
import Settings from '../components/page/Settings'
import TablesBasic from '../components/tables/TablesBasic'
import Tasks from '../components/page/Tasks'
import Terms from '../components/page/Terms'
const routes = [
    {
      path: '/',
      name: 'index',
      component: Index
    },
    {
      path: '/index',
      name: 'indexx',
      component: Index
    },
    {
      path: '/leads-dashboard',
      name: 'leads-dashboard',
      component: LeadsDashboard
    },
    {
      path: '/activities',
      name: 'activities',
      component: Activities
    },
    {
      path: '/blank-page',
      name: 'blank-page',
      component: Blankpage
    },
    {
      path: '/companies',
      name: 'companies',
      component: Companies
    },
    {
      path: '/components',
      name: 'components',
      component: Components
    },
    {
      path: '/contacts',
      name: 'contacts',
      component: Contacts
    },
    {
      path: '/data-tables',
      name: 'data-tables',
      component: Datatables
    },
    {
      path: '/deals-kanban-view',
      name: 'deals-kanban-view',
      component: DealsKanbanView
    },
    {
      path: '/leads-kanban-view',
      name: 'leads-kanban-view',
      component: LeadsKanbanView
    },
    {
      path: '/deals',
      name: 'deals',
      component: Deals
    },
    {
      path: '/email',
      name: 'email',
      component: Email
    },
    {
      path: '/error-404',
      name: 'error-404',
      component: Error404
    },
    {
      path: '/error-500',
      name: 'error-500',
      component: Error500
    },
    {
      path: '/faq',
      name: 'faq',
      component: Faq
    },
    {
      path: '/form-basic-inputs',
      name: 'form-basic-inputs',
      component: FormBasicInputs
    },
    {
      path: '/form-horizontal',
      name: 'form-horizontal',
      component: FormHorizontal
    },
    {
      path: '/form-input-groups',
      name: 'form-input-groups',
      component: FormInputGroups
    },
    {
      path: '/form-mask',
      name: 'form-mask',
      component: FormMask
    },
    {
      path: '/form-validation',
      name: 'form-validation',
      component: FormValidation
    },
    {
      path: '/form-vertical',
      name: 'form-vertical',
      component: FormVertical
    },
    {
      path: '/leads',
      name: 'leads',
      component: Leads
    },
    {
      path: '/login',
      name: 'login',
      component: Login
    },
    {
      path: '/mail-view',
      name: 'mail-view',
      component: MailView
    },
    {
      path: '/privacy-policy',
      name: 'privacy-policy',
      component: PrivacyPolicy
    },
    {
      path: '/profile',
      name: 'profile',
      component: Profile
    },
    {
      path: '/projects-kanban-view',
      name: 'projects-kanban-view',
      component: ProjectsKanbanView
    },
    {
      path: '/projects',
      name: 'projects',
      component: Projects
    },
    {
      path: '/register',
      name: 'register',
      component: Register
    },
    {
      path: '/reports',
      name: 'reports',
      component: Reports
    },
    {
      path: '/settings',
      name: 'settings',
      component: Settings
    },
    {
      path: '/tables-basic',
      name: 'tables-basic',
      component: TablesBasic
    },
    {
      path: '/tasks',
      name: 'tasks',
      component: Tasks
    },
    {
      path: '/terms',
      name: 'terms',
      component: Terms
    },
    {
      path: '/projects-dashboard',
      name: 'projects-dashboard',
      component: ProjectsDashboard
    }
  ];
    export const router = createRouter({
    history: createWebHistory('template/green'),
    linkActiveClass: 'active',
    routes
});