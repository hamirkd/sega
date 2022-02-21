/* tslint:disable:max-line-length */
import { FuseNavigationItem } from '@fuse/components/navigation';

export const defaultNavigation: FuseNavigationItem[] = [
    {
        id   : 'dashboard',
        title: 'Dashboard',
        type : 'basic',
        icon : 'heroicons_outline:chart-pie',
        link : '/example'
    },
    {
        id   : 'societes',
        title: 'Societes',
        type : 'basic',
        icon : 'heroicons_outline:users',
        link : '/societes'
    },
    {
        id   : 'salaries',
        title: 'Salariés',
        type : 'basic',
        icon : 'heroicons_outline:home',
        link : '/salaries'
    },
    {
        id   : 'rubriques',
        title: 'Rubriques',
        type : 'basic',
        icon : 'heroicons_outline:archive',
        link : '/rubriques'
    }, 
    {
        id   : 'traitement',
        title: 'Traitements',
        type    : 'collapsable',
        icon : 'heroicons_outline:currency-dollar',
     
    children: [
        
        {
            id   : 'Traitements DTS',
            title: 'Traitements DTS',
            type : 'basic',
            link : '/traitement-dts'
        },
        {
            id   : 'Traitements DAS',
            title: 'Traitements DAS',
            type : 'basic',
            link : '/traitement-das'
        },
        {
            id   : 'donnees-de-base-retenue',
            title: 'Donnees de base retenue',
            type : 'basic',
            link : '/donnees-de-base-retenue'
        },
    ]
},

    {
        id   : 'paies',
        title: 'Paies',
        type : 'basic',
        icon : 'heroicons_outline:currency-dollar',
        link : '/paies'
    },
];
export const compactNavigation: FuseNavigationItem[] = [
    {
        id   : 'example',
        title: 'Example',
        type : 'basic',
        icon : 'heroicons_outline:chart-pie',
        link : '/example'
    }
];
export const futuristicNavigation: FuseNavigationItem[] = [
    {
        id   : 'example',
        title: 'Example',
        type : 'basic',
        icon : 'heroicons_outline:chart-pie',
        link : '/example'
    }
];
export const horizontalNavigation: FuseNavigationItem[] = [
    {
        id   : 'example',
        title: 'Example',
        type : 'basic',
        icon : 'heroicons_outline:chart-pie',
        link : '/example'
    }
];
