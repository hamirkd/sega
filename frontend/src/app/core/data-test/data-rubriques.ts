import { Rubrique } from "app/models/rubrique.model";

export const _DATA_RUBRIQUES :Rubrique[] = [
	{
		id:1,
		"code": '1315',
		"sens": "+",
		"intitule": "Prime de véhicule",
		"type": "Brut",
		"gain": "Gain",
		"imprimable": "imprimmable",
        societe_id:1
	},{
		id:2,
		"code": '1320',
		"sens": "+",
		"intitule": "Prime exceptionnelle",
		"type": "Brut",
		"gain": "Gain",
		"imprimable": "imprimmable",
        societe_id:1
	},{
		id:3,
		"code": '1321',
		"sens": "-",
		"intitule": "CNSS",
		"type": "Cotisation",
		"gain": "Retenue",
		"imprimable": "imprimmable",
        societe_id:2
	},
]