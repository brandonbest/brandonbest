const routes = [
    {
        path: '/',
        name: 'Home',
        component: () => import("./views/Home"),
    },
    {
        path: '/about',
        name: 'About',
        meta: { title: 'About Brandon' },
        component: () => import("./views/About"),
    },
    {
        path: '/blog',
        name: 'Blog',
        meta: { title: 'Blog' },
        component: () => import("./views/blog/BlogIndex"),
    },
    {
        path: '/contact',
        name: 'Contact',
        meta: { title: 'Contact Brandon' },
        component: () => import("./views/Contact"),
    },
    {
        path: '/experience',
        name: 'Experience',
        meta: { title: 'Brandon\'s Experience' },
        component: () => import("./views/Experience"),
    },
    {
        path: '/privacy',
        name: 'Privacy Policy',
        meta: { title: 'Privacy Policy'},
        component: () => import("./views/Privacy"),
    },
    {
        path: '/portfolio',
        name: 'Portfolio',
        meta: { title: 'Brandon\'s Work'},
        component: () => import("./views/Portfolio"),
    },
    {
        path: '/resume',
        name: 'Resume',
        meta: { title: 'Brandon Best Resume' },
        component: () => import("./views/Resume"),
    },
    {
        path: '/site-map',
        name: 'Site Map',
        meta: { title: 'Brandon Best Site Map' },
        component: () => import("./views/SiteMap"),
    },
    {
        path: '/skills',
        name: 'Skills',
        meta: { title: 'Brandon\'s Skills' },
        component: () => import("./views/Skills"),
    },
    {
        path: '/terms-of-user',
        name: 'Terms of User',
        meta: { title: 'Brandon Best Terms' },
        component: () => import("./views/TermsOfUse"),
    },
    {
        path: '*',
        meta: { title: 'Page Not Found' },
        component: () => import("./views/errors/404"),
    }
];

export default routes;