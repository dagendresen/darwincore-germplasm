# darwincore-germplasm

## Germplasm Vocabulary

    Germplasm Term Vocabulary: http://purl.org/germplasm/germplasmTerm#TERM
    Germplasm Type Vocabulary: http://purl.org/germplasm/germplasmType#TYPE 

## Darwin Core extension for gene banks
The Germplasm Vocabulary is an extension to the Darwin Core standard (http://rs.tdwg.org/dwc/).
Darwin Core is maintained by Biodiversity Information Standards, TDWG (http://www.tdwg.org/). 
The Germplasm Term Vocabulary extends Darwin Core with the additional terms required to describe plant 
genetic resources with focus on germplasm seed samples maintained by gene banks worldwide.

Development of the Germplasm Term Vocabulary was initiated during a Darwin Core workshop in 
January 2009 organized at the Global Biodiversity Information Facility (GBIF) in Copenhagen. 
This germplasm extension is modeled directly from the Multi-Crop Passport standard and the 
(proposed) EPGRIS3 trait data standard for characterization and evaluation data (C&E). 
The original rationale for the Germplasm Vocabulary (Darwin Core extension for gene banks) 
was the development of an application schema for the GBIF Integrated data Publishing Toolkit (IPT). 
The Germplasm Vocabulary established the persistent URIs for germplasm terminology that was 
required to build the IPT application profiles.

The germplasm terms can be accessed at http://purl.org/germplasm/vocabulary. 
You will find three SKOS/RDF documents. The first document (germplasmTerm) 
provides the definition for the terms added as extension to the Darwin Core terms. 
The next document (germplasmType) provides element terms for the recommended 
controlled element vocabularies to be used with the germplasm terms. 
The final document (germplasmContact) declares persistent URIs for the institutes 
and persons involved in the development and maintenance of the germplasm terms.

    http://purl.org/germplasm/germplasmTerm
    http://purl.org/germplasm/germplasmType
    http://purl.org/germplasm/germplasmContact

## Application profiles (GBIF IPT)

The Germplasm Term Vocabulary was originally developed as a prerequisite for development 
of new application profiles to the GBIF Integrated data Publishing Toolkit (IPT). 
The application profiles can in this aspect be seen as "Darwin Core Archive-extensions" 
or "IPT-extensions". The GBIF application profiles for terms are immutable and new versions 
will be released on separate URI spaces. The latest version for these "extension" profiles 
can be accessed at http://rs.gbif.org/extension/germplasm/.

    http://rs.gbif.org/extension/germplasm/GermplasmAccession.xml
    http://rs.gbif.org/extension/germplasm/MeasurementTrial.xml
    http://rs.gbif.org/extension/germplasm/MeasurementTrait.xml
    http://rs.gbif.org/extension/germplasm/MeasurementScore.xml

In contrast, the application profiles for the IPT type vocabularies are mutable - and new 
updates to these will be released on the same URI, http://rs.gbif.org/vocabulary/germplasm/.

    http://rs.gbif.org/vocabulary/germplasm/AcquisitionSourceType.xml
    http://rs.gbif.org/vocabulary/germplasm/BiologicalStatusType.xml
    http://rs.gbif.org/vocabulary/germplasm/StorageConditionType.xml


## Contribute to maintain the Germplasm Vocabulary!
The TDWG terms wiki provides a forum for collaborative development and maintenance of term vocabularies. 
To contribute to the further development of the germplasm terms you may create a user account at the 
TDWG term wiki site http://terms.tdwg.org/wiki/Germplasm. The term wiki is public and updates here can 
in this respect also be seen as public annotations to the official germplasm terms.

    TDWG Terms Wiki :: germplasm: http://terms.tdwg.org/wiki/Germplasm 

To contribute to the maintenance of the release version of the Germplasm Term Vocabulary you will need a GitHub Account. Contact: dag.endresen@gmail.com if you want to contribute 
to the source code for the Germplasm Vocabulary (Darwin Core extension for gene banks).


## Citation

 Endresen, D.T.F. and H. Knüpffer (2012). The Darwin Core extension for genebanks opens 
 up new opportunities for sharing genebank data sets. Biodiversity Informatics 8:11-29. 
 Available online at https://journals.ku.edu/index.php/jbi/article/view/4095

 Endresen, D., S. Gaiji, and T. Robertson (2009). DarwinCore Germplasm Extension and 
 deployment in the GBIF infrastructure. Proceedings of TDWG 2009, Montpellier, France. 
 Bioversity Information Standards (TDWG). 
 Available at http://www.tdwg.org/proceedings/article/view/464


## Links
* Darwin Core standard, http://rs.tdwg.org/dwc/
* Biodiversity Information Standards, TDWG, http://www.tdwg.org/
* Global Biodiversity Information Facility, GBIF, http://www.gbif.org/
* Multi-Crop Passport descriptor standard, MCPD, http://www.bioversityinternational.org/e-library/publications/single-details-publication/?tx_news_pi1[news]=177&cHash=a8d7778e9e4077f1047996a639a51a19
* TDWG Wiki, germplasm vocabulary, http://terms.tdwg.org/wiki/Germplasm
* Germplasm ontology, http://germplasm.googlecode.com/
* Germplasm ontology mailing list, http://groups.google.com/group/germplasm-ontology
* Crop Ontology, http://www.cropontology.org/
* agInfra germplasm working group, http://wiki.aginfra.eu/index.php/Germplasm_Working_Group
* Dublin Core standard, http://dublincore.org/documents/dcmi-terms/
* EPGRIS3 2009 workshop, http://www.epgris3.eu/EPGRIS3%2020090507workshop.htm
* TDWG/GBIF Vocabulary Management working group, http://community.gbif.org/pg/pages/view/30278/


´Everything should be made as simple as possible, but not simpler. (Albert Einstein, June 1933)´


Automatically exported from code.google.com/p/darwincore-germplasm
