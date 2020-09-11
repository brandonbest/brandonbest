const routes = [
    {
        path: '/',
        name: 'Home',
        component: () => import("./views/Home"),
    },
    {
        path: '/about',
        component: () => import("./views/EmptyRouterView"),
        children: [
            {
                path: '',
                name: 'About',
                meta: { title: 'About Brandon' },
                component: () => import("./views/About"),
            },
            {
                path: 'backyard',
                name: 'about.backyard',
                component: () => import("./views/about/Backyard"),
            },
            {
                path: 'hiking',
                name: 'about.hiking',
                component: () => import("./views/about/Hiking"),
            },
            {
                path: 'wood-working',
                name: 'about.wood-working',
                component: () => import("./views/about/WoodWorking"),
            },
        ]
    },
    {
        path: '/accomplishments',
        component: () => import("./views/EmptyRouterView"),
        children: [
            {
                path: '',
                name: 'accomplishments.overview',
                meta: { title: 'Brandon\'s Accomplishments' },
                component: () => import("./views/accomplishments/Overview"),
            },
            {
                path: ':slug',
                name: 'accomplishments.accomplishment',
                meta: { title: 'Brandon\'s Accomplishment' },
                component: () => import("./views/accomplishments/Accomplishment"),
            }
        ]
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
        component: () => import("./views/EmptyRouterView"),
        children: [
            {
                path: '',
                name: 'experience',
                meta: { title: 'Brandon\'s Experience' },
                component: () => import("./views/Experience"),
            },
            {
                path: 'bisnow',
                name: 'experience.bisnow',
                meta: { title: 'Bisnow' },
                component: () => import("./views/companies/Bisnow"),
            },
            {
                path: 'dream-ideation',
                name: 'experience.dream-ideation',
                meta: { title: 'Dream Ideation' },
                component: () => import("./views/companies/DreamIdeation"),
            },
            {
                path: 'mesa-public-schools',
                name: 'experience.mesa-public-schools',
                meta: { title: 'Mesa Public Schools' },
                component: () => import("./views/companies/MesaPublicSchools"),
            },
            {
                path: 'rich-hessler-solar',
                name: 'experience.rich-hessler-solar',
                meta: { title: 'Bisnow' },
                component: () => import("./views/companies/RichHessler"),
            },
        ]
    },
    {
        path: '/legal',
        component: () => import("./views/EmptyRouterView"),
        children: [
            {
                path: '',
                name: 'legal',
                meta: { title: 'Legal' },
                component: () => import("./views/legal/Legal"),
            },
            {
                path: 'data',
                name: 'legal.data',
                meta: { title: 'Brandon Best Data Request'},
                component: () => import("./views/legal/data"),
            },
            {
                path: 'privacy',
                name: 'legal.privacy',
                meta: { title: 'Brandon Best Privacy Policy'},
                component: () => import("./views/legal/Privacy"),
            },
            {
                path: 'terms-of-use',
                name: 'legal.terms',
                meta: { title: 'Brandon Best Terms' },
                component: () => import("./views/legal/TermsOfUse"),
            },
        ]
    },
    {
        path: '/legal/cookies',
        name: 'legal.cookies',
        meta: { title: 'Brandon Best Cookie Policy'},
        component: () => import("./views/legal/Cookie"),
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
        name: 'sitemap',
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
        path: '*',
        meta: { title: 'Page Not Found' },
        component: () => import("./views/errors/404"),
    }
];

export default routes;