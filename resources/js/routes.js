import CreateForm from './components/Create';
import UsersTable from './components/users/UsersTable';
import PagesTable from './components/pages/PagesTable';
import EditForm from './components/Edit';

export const routes = [
    {
        path: '/',
        name: 'home',
        component: UsersTable
    },
    {
        path: '/usses/create',
        name: 'create',
        component: CreateForm
    },
    {
        path: '/usses/:id',
        name: 'edit',
        component: EditForm
    },
    {
        path: '/tournament',
        name: 'tournament',
        component: PagesTable
    }

];
