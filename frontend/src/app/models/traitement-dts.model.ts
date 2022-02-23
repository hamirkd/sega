export class TraitementDts{

     id?:number;
     trimestre:number;
     annee:number;
     societe_id:number;
     alloc_familiale:number;
     ristourne:number;
     autre_deduc:number;
     precision:string;
     avance:number;
     reste:number;
     numero_dts:string;

    constructor(decl:any){
        this.id=decl.id;
        this.annee=decl.annee;
        this.trimestre=decl.trimestre;
        this.societe_id=decl.societe_id;
        this.alloc_familiale=decl.alloc_familiale;
        this.ristourne=decl.ristourne;
        this.autre_deduc=decl.autre_deduc;
        this.precision=decl.precision;
        this.avance=decl.avance;
        this.reste=decl.reste;
        this.numero_dts=decl.numero_dts;
    }

    copy?(decl:any){
        this.annee=decl.annee;
        this.trimestre=decl.trimestre;
        this.societe_id=decl.societe_id;
        this.alloc_familiale=decl.alloc_familiale;
        this.ristourne=decl.ristourne;
        this.autre_deduc=decl.autre_deduc;
        this.precision=decl.precision;
        this.avance=decl.avance;
        this.reste=decl.reste;
        this.numero_dts=decl.numero_dts;
    }

 }
            