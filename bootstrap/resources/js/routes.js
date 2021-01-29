import CreateForm from './components/Create';
import UsersTable from './components/users/UsersTable';
import EditForm from './components/Edit';

export const routes = [
    {
        path: '/',
        name: 'home',
        component: UsersTable
    },
    {
        path: '/user/create',
        name: 'create',
        component: CreateForm
    },
    {
        path: '/user/:id',
        name: 'edit',
        component: EditForm
    }
];