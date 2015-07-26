# Germplasm Vocabulary #

  * Germplasm Term Vocabulary: <a href='http://purl.org/germplasm/germplasmTerm'><a href='http://purl.org/germplasm/germplasmTerm#TERM'>http://purl.org/germplasm/germplasmTerm#TERM</a></a>
  * Germplasm Type Vocabulary: <a href='http://purl.org/germplasm/germplasmType'><a href='http://purl.org/germplasm/germplasmType#TYPE'>http://purl.org/germplasm/germplasmType#TYPE</a></a>


## Darwin Core extension for gene banks ##

The <a href='http://terms.tdwg.org/wiki/Germplasm'>Germplasm Vocabulary</a> is an extension to the <a href='http://rs.tdwg.org/dwc/index.htm'>Darwin Core</a> standard (Darwin Core is maintained by <a href='http://www.tdwg.org'>TDWG</a>). The Germplasm Term Vocabulary extends Darwin Core with the additional terms required to describe plant genetic resources with focus on germplasm seed samples maintained by gene banks worldwide.

<a href='http://code.google.com/p/darwincore-germplasm/wiki/ToC'><img src='http://darwincore-germplasm.googlecode.com/svn/trunk/images/dwc-g.gif' align='right' border='0' /></a>

Development of the Germplasm Term Vocabulary was initiated during a Darwin Core workshop in January 2009 organized at the Global Biodiversity Information Facility (<a href='http://www.gbif.org'>GBIF</a>) in Copenhagen. This germplasm extension is modeled directly from the <a href='http://www.bioversityinternational.org/e-library/publications/single-details-publication/?tx_news_pi1[news]=177&cHash=a8d7778e9e4077f1047996a639a51a19'>Multi-Crop Passport standard</a> and the (proposed) EPGRIS3 trait data standard for characterization and evaluation data (C&E). The original rationale for the Germplasm Vocabulary (Darwin Core extension for gene banks) was the development of an application schema for the GBIF Integrated data Publishing Toolkit (IPT). The Germplasm Vocabulary established the persistent URIs for germplasm terminology that was required to build the IPT application profiles.

The germplasm terms can be accessed at <a href='http://purl.org/germplasm/vocabulary'><a href='http://purl.org/germplasm/vocabulary'>http://purl.org/germplasm/vocabulary</a></a>. You will find three SKOS/RDF documents. The first document (_germplasmTerm_) provides the definition for the terms added as extension to the Darwin Core terms. The next document (_germplasmType_) provides element terms for the recommended controlled element vocabularies to be used with the germplasm terms. The final document (_germplasmContact_) declares persistent URIs for the institutes and persons involved in the development and maintenance of the germplasm terms.

<ul>
<li><a href='http://purl.org/germplasm/germplasmTerm'><a href='http://purl.org/germplasm/germplasmTerm'>http://purl.org/germplasm/germplasmTerm</a></a></li>
<li><a href='http://purl.org/germplasm/germplasmType'><a href='http://purl.org/germplasm/germplasmType'>http://purl.org/germplasm/germplasmType</a></a></li>
<li><a href='http://purl.org/germplasm/germplasmContact'><a href='http://purl.org/germplasm/germplasmContact'>http://purl.org/germplasm/germplasmContact</a></a></li>
</ul>


## Application profiles (GBIF IPT) ##

The Germplasm Term Vocabulary was originally developed as a prerequisite for development of new application profiles to the GBIF Integrated data Publishing Toolkit (IPT). The application profiles can in this aspect be seen as <i>"Darwin Core Archive-extensions"</i> or <i>"IPT-extensions"</i>. The GBIF application profiles for terms are immutable and new versions will be released on separate URI spaces. The latest version for these "extension" profiles can be accessed at <a href='http://rs.gbif.org/extension/germplasm/'><a href='http://rs.gbif.org/extension/germplasm/'>http://rs.gbif.org/extension/germplasm/</a></a>.

<ul>
<li><a href='http://rs.gbif.org/extension/germplasm/GermplasmAccession.xml'><a href='http://rs.gbif.org/extension/germplasm/GermplasmAccession.xml'>http://rs.gbif.org/extension/germplasm/GermplasmAccession.xml</a></a></li>
<li><a href='http://rs.gbif.org/extension/germplasm/MeasurementTrial.xml'><a href='http://rs.gbif.org/extension/germplasm/MeasurementTrial.xml'>http://rs.gbif.org/extension/germplasm/MeasurementTrial.xml</a></a></li>
<li><a href='http://rs.gbif.org/extension/germplasm/MeasurementTrait.xml'><a href='http://rs.gbif.org/extension/germplasm/MeasurementTrait.xml'>http://rs.gbif.org/extension/germplasm/MeasurementTrait.xml</a></a></li>
<li><a href='http://rs.gbif.org/extension/germplasm/MeasurementScore.xml'><a href='http://rs.gbif.org/extension/germplasm/MeasurementScore.xml'>http://rs.gbif.org/extension/germplasm/MeasurementScore.xml</a></a></li>
</ul>

In contrast, the application profiles for the IPT type vocabularies **are** mutable - and new updates to these will be released on the same URI, <a href='http://rs.gbif.org/vocabulary/germplasm/'><a href='http://rs.gbif.org/vocabulary/germplasm/'>http://rs.gbif.org/vocabulary/germplasm/</a></a>.

<ul>
<li><a href='http://rs.gbif.org/vocabulary/germplasm/AcquisitionSourceType.xml'><a href='http://rs.gbif.org/vocabulary/germplasm/AcquisitionSourceType.xml'>http://rs.gbif.org/vocabulary/germplasm/AcquisitionSourceType.xml</a></a></li>
<li><a href='http://rs.gbif.org/vocabulary/germplasm/BiologicalStatusType.xml'><a href='http://rs.gbif.org/vocabulary/germplasm/BiologicalStatusType.xml'>http://rs.gbif.org/vocabulary/germplasm/BiologicalStatusType.xml</a></a></li>
<li><a href='http://rs.gbif.org/vocabulary/germplasm/StorageConditionType.xml'><a href='http://rs.gbif.org/vocabulary/germplasm/StorageConditionType.xml'>http://rs.gbif.org/vocabulary/germplasm/StorageConditionType.xml</a></a></li>
</ul>

<br />



# Contribute to maintain the Germplasm Vocabulary! #

The TDWG terms wiki provides a forum for collaborative development and maintenance of term vocabularies. To contribute to the further development of the germplasm terms you may create a user account at the TDWG term wiki site <a href='http://terms.tdwg.org/wiki/Germplasm'><a href='http://terms.tdwg.org/wiki/Germplasm'>http://terms.tdwg.org/wiki/Germplasm</a></a>. The term wiki is public and updates here can in this respect also be seen as public annotations to the official germplasm terms.

  * TDWG Terms Wiki :: germplasm: <a href='http://terms.tdwg.org/wiki/Germplasm'><a href='http://terms.tdwg.org/wiki/Germplasm'>http://terms.tdwg.org/wiki/Germplasm</a></a>

To contribute to the maintenance of the release version of the Germplasm Term Vocabulary you will need a <a href='http://webtrends.about.com/od/howtoguides/ht/google_howto.htm'>Google Account</a>, such as e.g. your <a href='https://www.google.com/accounts/NewAccount?service=mail&continue=http%3A%2F%2Fmail.google.com%2Fmail%2Fe-11-118e3dc5b21bb520f2f047d6e4078221-6298e7e0feec657ea091a9e4b016473ca689f9d5&type=2'>Gmail username</a>. Contact: <a href='mailto:dag.endresen@gmail.org'>dag.endresen@gmail.com</a> if you want to contribute to the Germplasm Vocabulary (Darwin Core extension for gene banks) here at this Google Code site.

Sign up to our <a href='http://groups.google.com/group/germplasm-ontology'>mailing list</a> to participate in the development and ask questions.

**See also** the <a href='http://germplasm.googlecode.com/'>Germplasm Ontology</a>, the <a href='http://www.cropontology.org/'>Crop Ontology</a>, and the <a href='http://wiki.aginfra.eu/index.php/Germplasm_Working_Group'>agInfra Germplasm Working Group</a>.

<br />


<a href='http://code.google.com/p/darwincore-germplasm/wiki/ToC'>READ MORE!</a>


<br /><br />
<font size='-1'><i>Everything should be made as simple as possible, but not simpler.<br>
(Albert Einstein, June 1933)</i></font>