# germplasm - DesignGoals.wiki

## Design Goals
On this page we present our design decisions and goals for building and modeling the Germaplasm Ontology. The most utilized terminology for plant germplasm are contained within the PGR Descriptors publications which are booklets containing various concepts for managing and dealing with germplasm.

These however are strictly standards and there's currently no framework for using these terms say within a database. Germplasm Ontology aims at digitizing this terminology into a semantically-rich structure that would allow not only for people to refer to these terms using globally unique identifiers such as HTTP URIs, but also for people to create a so called web of data or Linked Data around germplasm.

## Starting with Musa
We decided to start digitizing Musa first. Here you'll find the PDF of the descriptors for the crop Musa: http://www.bioversityinternational.org/e-library/publications/detail/descriptors-for-banana-emmusaem-spp/

Each publications concentrates on a single crop, however, many of the terms are shared across crops. Remember that we're dealing with germplasm, so things like collection, sample, accession are shared and simply need to be formalized in an OWL expression.

By looking at the first section of the publication we see this:

![Screenshot Definition and use of the descriptors](http://i.imgur.com/ueLoJRU.png)

As you can see the descriptors are grouped together. There's the passport descriptors, the management, the environment and site and finally the characterization and evaluation descriptors. The Germplasm Ontology will follow this structure and will simply formalize it using proper OWL semantics.

## Passport descriptors
Passport contains two sections, the accession descriptors and the collecting descriptors. The only entity we can extract from this section is probably the accession entity, which plays a major role in the ontology:

Since this entity describes essentially a bag of seeds, we can subclass the concept already defined here http://purl.org/germplasm/germplasmTerm#GermplasmAccession and add some more semantics as needed.

## Environment and Site
Moving to the next section we can find new entities for Characterization and Evaluation events and also perhaps an entity for describing the Collection event. For these we can use the Event Ontology:

    @prefix event: http://purl.org/NET/c4dm/event.owl# .

    g:Observation rdfs:subClassOf event:Event . g:Collection rdfs:subClassOf event:Event .

    g:Characterization rdfs:subClassOf g:Observation . g:Evaluation rdfs:subClassOf g:Observation.

## Characterization
As we can see from this section there's lots of terminology (almost a taxonomy) describing very specific characteristics of the Musa crop. This section changes for each crop, however some concepts are the same across crops. The entity here is most definitely g:Characterization but for the properties things are a little more complicated because there's lots of them and they change for each crop.

Instead of having Germplasm Ontology define all of this taxonomy, we think that is much more beneficial to let the data provider point to a URI for the concept that already exists somewhere else. For example for the trait "leaf habit" there's most likely other ontologies that define this concept. In fact Crop Ontology defines this here: http://www.cropontology.org/rdf/CO_325:0000111/

However it doesn't contain the extra information available in the publication such as the values this property could have: Erect, Intermediate and Drooping.

Do we mint new URIs for these concepts? We should see if these already exist out there

## Examples
Let's try and annotate some real data. I've decided to take GRIN as an example using specifically this accession: http://www.ars-grin.gov/cgi-bin/npgs/acc/search.pl?accid=PI%20211040

    @prefix rdf: http://www.w3.org/1999/02/22-rdf-syntax-ns# . @prefix wgs84_pos: http://www.w3.org/2003/01/geo/wgs84_pos# .

## using DarwinCore
    @prefix dwc: http://rs.tdwg.org/dwc/terms/ .

## using https://code.google.com/p/darwincore-germplasm/ as vocabulary for germplasm stuff

    @prefix germplasm: http://purl.org/germplasm/germplasmTerm# . 
    @prefix germplasmType: http://purl.org/germplasm/germplasmType# .

<12787> # let's say it's a germplasm accession a germplasm:GermplasmAccession;

    # germplasmID is for accenumb
    germplasm:germplasmID "PI 211040";

    # this is accession name
    germplasm:germplasmIdentifier "12787";

    germplasmType:wiewsInstituteID "USA029";

    # now we can even use Darwin Core directly
    dwc:genus "Hordeum";  
    dwc:specificEpithet "murinum"
    .

This isn't exactly straightforward. First you have to know about a whole lot of different vocabularies such as the germplasm, the germplasmType, dwc and so on. Second you have to understand the semantics of these vocabularies and how to use them. Germplasm Ontology (@prefix g:) will give you a single namespace that you can use, with straightforward semantics, which at the same time will allow you to reason and infer new knowledge based on the relationships with these above terms. So we can write something like this:

   @prefix g: http://purl.org/germplasm/ontology# .

   <12787> a g:GermplasmAccession; g:acceNumb "PI 211040"; 
   g:acceName "12787"; g:instCode "USA029"; g:genus "Hordeum"; g:species "murinum" .

Easier no? But literals are not very exciting as values. Things should be more fine-grained.

## Modularity
Let's take a look at another accession, this time from the IITA genebank: http://genebank.iita.org/browse/accession.aspx/TDa-1358 . We can see that this accession also contains some characterization information. Perhaps we can also change the design a bit to be a little more modular and more Linked Data friendly by exploiting data within DBpedia:

    @prefix g: http://purl.org/germplasm/ontology# .

    http://genebank.iita.org/TDa-1358 a g:GermplasmAccession; 
    g:crop http://dbpedia.org/resource/Yam_(vegetable); 
    g:acceNumb "TDa-1358"; 
    g:genus http://dbpedia.org/resource/Dioscorea; 
    g:species http://dbpedia.org/resource/Dioscorea_alata; 
    g:countryOfOrigin http://dbpedia.org/resource/Togo .

If we use this design for the passport data we can see that things could also be written this way, allowing for a much modular design:

    http://genebank.iita.org/TDa-1358 a g:GermplasmAccession; g:crop <#yam>;

    <#yam> a g:Crop; rdfs:label "Yam" .
