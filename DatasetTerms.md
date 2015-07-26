Back to the [DarwinCoreGermplasmTerms](DarwinCoreGermplasmTerms.md).

# Dataset #

  * _dwc:datasetID_ [http://rs.tdwg.org/dwc/terms/index.htm#datasetID]
  * _dwc:datasetName_ [http://rs.tdwg.org/dwc/terms/index.htm#datasetName]
  * _dwc:collectionID_ [http://rs.tdwg.org/dwc/terms/index.htm#collectionID]
  * _dwc:collectionCode_ [http://rs.tdwg.org/dwc/terms/index.htm#collectionCode]
  * _dwc:institutionID_ http://rs.tdwg.org/dwc/terms/index.htm#institutionID
  * _dwc:institutionCode_ http://rs.tdwg.org/dwc/terms/index.htm#institutionCode (mcpd:INSTCODE)


<img src='http://darwincore-germplasm.googlecode.com/svn/trunk/images/illustrations/cereals.gif' align='right' />

Proposed terms:
  * NationalInventoryCode (eurisco:NICODE)
  * UploaderCode (epgris3-trait:UPLOADERCODE)
  * DatasetRemarks (epgris3-trait:DATASET\_REMARKS)


<br />
<br />

**Dataset** is the set of data the record belong to. For EURISCO the datasetName could for example be the National Inventory. The datasetID would preferably be a global unique persistent identifier.

**Collection** identify the collection or data set from which the record was derived. For germplasm collected during a collecting expedition, the collectionCode could be the name or acronym of the expedition. For germplasm of a genetic stock collection, the collectionCode could be the name or acronym for this Genetic Stock collection. The collectionID would preferably be a global unique persistent identifier.

**Institution** is the name (or acronym) in use by the institution having custody of the object(s) or information referred to in the record; holding genebank for germplasm samples. For germplasm the FAO WIEWS institute code (INSTCODE) would be used as the institutionCode. The institutionID would preferably be a global unique persistent identifier.