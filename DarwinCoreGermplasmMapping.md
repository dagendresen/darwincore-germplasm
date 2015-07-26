# Mapping #

  * Mapping of DwC to the MCPD The Multi-Crop Passport Descriptor list, developed in 2001 by FAO and IPGRI (now Bioversity) is a widely used list of terms for documentation of Crop Germplasm.

  * Mapping of EURISCO descriptors to the ABCD (2004-2006)
    * http://www.bgbm.org/tdwg/codata/Schema/Mappings/EURISCO-2-ABCD.pdf
    * http://www.ecpgr.cgiar.org/epgris/Tech_papers/EURISCO_Descriptors.pdf




## Mapping of the MCPD to the DwC ##

Proposed mapping of the most common Germplasm Passport data descriptors to the Darwin Core and the Darwin Core Germplasm Extension. Please contribute to the discussion below.


| Num	| Domain | MCPD Descriptor	| DwC Domain	| Term	| Note	|
|:----|:-------|:----------------|:-----------|:-----|:-----|
| 0   |	EURISCO	| NICODE| DwC	       |	datasetID | |
| 1   |	MCPD   | INSTCODE        |	DwC        | institutionCode |      |
| 2   |	MCPD   | ACCENUMB        | DwC        | catalogNumber	|      |
| (2) | |	                | DwC Germplasm | GermplasmID | dwc:occurrenceID |
| (2) |	|		               |	DwC Germplasm	|	GermplasmIdentifier	|	|
| 3   |	MCPD	  |	COLLNUMB	       |	DwC	       |	recordNumber|		    |
| 4   |	MCPD	  |	COLLCODE	       |	DwC Germplasm	|	CollectingInstituteCode	|		    |
| 5   |	MCPD	  |	GENUS	          |	DwC	       |	genus	|		    |
| 6   |	MCPD	  |	SPECIES	        |	DwC	       |	specificEpithet	|		    |
| 7   |	MCPD	  |	SPAUTHOR|	DwC	       |	scientificNameAuthorship	|		    |
| 8   |	MCPD	  |	SUBTAXA	        |	DwC	       |	infraspecificEpithet	|		    |
| 9   |	MCPD	  |	SUBTAUTHOR|	DwC	       |	scientificNameAuthorship	|		    |
| 10  |	MCPD	  |	CROPNAME	       |	DwC	       |	vernacularName	|		    |
| 11  |	MCPD	  |	ACCENAME	       |	DwC Germplasm	|	BreedersSampleIdentifier	|		    |
| 12  |	MCPD	  |	ACQDATE	        |	DwC Germplasm	|	SampleAcquisitionDate	|		    |
| (12) |	|		               |	DwC Germplasm	|	SampleAcquisitionID	|	|
| (12) |	|		               |	DwC Germplasm	|	SampleAcquisitionRemarks	|	|
| 13  |	MCPD	  |	ORIGCTY	        |	DwC	       |	countryCode	|		    |
| 14  |	MCPD	  |	COLLSITE	       |	DwC	       |	locality	|		    |
| 15  |	MCPD	  |	LATITUDE	       |	DwC	       |	decimalLatitude	|		    |
| 16  |	MCPD	  |	LONGITUDE	      |	DwC	       |	decimalLongitude	|		    |
| 17  |	MCPD	  |	ELEVATION	      |	DwC	       |	minimumElevationinMeters	|		    |
| 18  | MCPD	  |	COLLDATE	       |	DwC	       |	eventDate	|		    |
| 19  | MCPD	  |	BREDCODE	       |	DwC Germplasm	|	BreederInstituteCode	|		    |
| (19) | |		               |	DwC Germplasm	|	BreederPerson	|	|
| (19) | |		               |	DwC Germplasm	|	BreedingCountry	|	|
| (19) | |		               |	DwC Germplasm	|	BreedingCountryCode	|	|
| (19) | |		               |	DwC Germplasm	|	BreedingEventID	|	|
| (19) | |		               |	DwC Germplasm	|	BreedingEventRemarks	|	|
| (19) | |		               |	DwC Germplasm	|	BreedingYear	|	|
| 20  |	MCPD	  |	SAMPSTAT	       |	DwC Germplasm	|	BiologicalStatusOfSampleCode	|		    |
| (20) |	|		               |	DwC Germplasm	|	BiologicalStatusOfSample	||
| 21  |	MCPD	  |	ANCEST          |DwC Germplasm|AncestralData |		    |
| (21) |	|		               |	DwC Germplasm	|	PurdyPedigree	|	|
| 22  |	MCPD	  |	COLLSRC	        |	DwC Germplasm	|	SampleAcquisitionSource	|	     |
| 23  |	MCPD	  |	DONORCODE	      |	DwC Germplasm	|	DonorInstituteCode	|		    |
| 24  |	MCPD	  |	DONORNUMB	      |	DwC Germplasm	|	DonorsSampleIdentifier	|		    |
| 25  |	MCPD	  |	OTHERNUMB	      |	DwC	       |	otherCatalogNumbers	|		    |
| 26  |	MCPD	  |	DUPLSITE	       |	DwC Germplasm	|	SafetyDuplicationInstituteCode	|	     |
| (26) |	|		               |	DwC Germplasm	|	SafetyDuplicationDate	|	|
| (26) |	|		               |	DwC Germplasm	|	SafetyDuplicationID	|	|
| 27  |	MCPD	  |	STORAGE	        |	DwC Germplasm	|	TypeOfStorage	|		    |
| 28  |	MCPD	  |	REMARKS	        |	DwC	       |	occurrenceRemarks	|		    |
| 30  |	EURISCO	|	BREDDESCR	      |	DwC Germplasm	|	BreederInstitute	|		    |
| 31  |	EURISCO	|	DONORDESCR	     |	DwC Germplasm	|	DonorInstitute	|		    |
| 32  |	EURISCO	| DUPLDESCR       | DwC Germplasm | SafetyDuplicationInstitute |		    |
| 33  |	EURISCO	|	ACCEURL	        |	DwC	       |	[occurrenceDetails](http://rs.tdwg.org/dwc/terms/index.htm#occurrenceDetails)	|	|