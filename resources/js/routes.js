const routes = [
    {
        path: '/',
        name: 'Home',
        component: () => import("./views/Home"),
    },
    {
        path: '/skills',
        name: 'Skills',
        component: () => import("./views/Skills"),
    },
    {
        path: '*',
        component: () => import("./views/errors/404"),
    }
];

export default routes;