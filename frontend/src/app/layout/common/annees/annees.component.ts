import { ChangeDetectionStrategy, ChangeDetectorRef, Component, OnDestroy, OnInit, ViewEncapsulation } from '@angular/core';
import { AvailableLangs, TranslocoService } from '@ngneat/transloco';
import { FuseNavigationService } from '@fuse/components/navigation';
import { LayoutComponent } from 'app/layout/layout.component';
import { Router } from '@angular/router';
import { AnneeService } from 'app/core/services/annee.service';

@Component({
    selector       : 'annees',
    templateUrl    : './annees.component.html',
    encapsulation  : ViewEncapsulation.None,
    changeDetection: ChangeDetectionStrategy.OnPush,
    exportAs       : 'annees'
})
export class AnneesComponent implements OnInit, OnDestroy
{
    availableLangs: AvailableLangs;
    activeLang: string;
    listeAnnees : number[]=[];
    anneeActive:number;

    /**
     * Constructor
     */
    constructor( 
        private _translocoService: TranslocoService,
        private _anneeService:AnneeService,
        private _fuseNavigationService: FuseNavigationService,
        private router:Router
    )
    {
    }

    // -----------------------------------------------------------------------------------------------------
    // @ Lifecycle hooks
    // @ Lifecycle hooks
    // -----------------------------------------------------------------------------------------------------

    /**
     * On init
     */
    ngOnInit(): void
    {
        // this.listeAnnees = 
        this.listeAnnees= this._anneeService.getAll();
        
        this.anneeActive = this._anneeService.activeAnnee;
    }

    /**
     * On destroy
     */
    ngOnDestroy(): void
    {
    }

    // -----------------------------------------------------------------------------------------------------
    // @ Public methods
    // -----------------------------------------------------------------------------------------------------

    /**
     * Set the active lang
     *
     * @param annee
     */
     setActiveAnnee(annee: number): void
    {
        // Set the active lang
        this._anneeService.activeAnnee = annee
        this.anneeActive = annee;
        this._updateNavigation();
    }

    /**
     * Track by function for ngFor loops
     *
     * @param index
     * @param item
     */
    trackByFn(index: number, item: any): any
    {
        return item.id || index;
    }

    private _updateNavigation(): void
    {
        
        // const navComponent = this._fuseNavigationService.getComponent<LayoutComponent>('mainContent');
        // console.log(this._fuseNavigationService.getAll())

        // if ( !navComponent )
        // {
        //     return null;
        // }
        // navComponent.refresh();
        const lastLink = this.router.url;
        this.router.navigateByUrl('/signed-in-redirect').then(() => {
            this.router.navigate([lastLink]);
        }); 
           
    }
}
