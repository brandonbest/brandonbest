const routes = [
    {
        path: '/',
        name: 'home',
        component: require("../views/Home"),
    },
    {
        path: '/about',
        component: require("../views/EmptyRouterView"),
        children: [
            {
                path: '',
                name: 'about',
                component: require("../views/About"),
            },
            {
                path: 'backyard',
                name: 'about.backyard',
                component: require("../views/Backyard"),
            },
            {
                path: 'hiking',
                name: 'about.hiking',
                component: require("../views/Hiking"),
            },
            {
                path: 'wood-working',
                name: 'about.wood-working',
                component: require("../views/WoodWorking"),
            },
        ]

    },
    {
        path: '/blog',
        name: 'blog',
        component: require("../views/Blog"),
    },
    {
        path: '/contact',
        name: 'contact',
        component: require("../views/Contact"),
    },
    {
        path: '/experience',
        name: 'experience',
        component: require("../views/Experience"),
    },
    {
        path: '/portfolio',
        component: require("../views/EmptyRouterView"),
        children: [
            {
                path: '',
                name: 'portfolio',
                component: require("../views/Portfolio"),
            },
            {
                path: 'website',
                name: 'portfolio-websites',
                component: require("../views/Websites"),
            },
        ]
    },
    {
        path: '/resume',
        name: 'resume',
        component: require("../views/Resume"),
    },
    {
        path: '/services',
        name: 'services',
        component: require("../views/Services"),
    },
    {
        path: '/skills',
        name: 'skills',
        component: require("../views/Skills"),
    },
    {
        path: '*',
        component: require("../views/errors/404"),
    }
]

export default routes;