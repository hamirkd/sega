export class DasQuittances {
    id?:number;
    traitements_dts_salaries_id:number;
    mois:number;
    societe_id:number;
    annee:number;
    montant:number;
    n_quittance:string;
    nature:string;
    date_quittance:string;
    constructor(dasquittances) {
        this.id = dasquittances.id;
        this.traitements_dts_salaries_id = dasquittances.traitements_dts_salaries_id;
        this.mois = dasquittances.mois;
        this.montant = dasquittances.montant;
        this.n_quittance = dasquittances.n_quittance;
        this.nature = dasquittances.nature;
        this.date_quittance = dasquittances.date_quittance;
    }
    
    copy?(dasquittances) {
        this.traitements_dts_salaries_id = dasquittances.traitements_dts_salaries_id;
        this.mois = dasquittances.mois;
        this.montant = dasquittances.montant;
        this.n_quittance = dasquittances.n_quittance;
        this.nature = dasquittances.nature;
        this.date_quittance = dasquittances.date_quittance;
    }
}
