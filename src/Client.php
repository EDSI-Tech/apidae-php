<?php

namespace ApidaePHP;

use ApidaePHP\Traits\Export;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use ApidaePHP\Description\Sso;
use GuzzleHttp\Command\Result;
use ApidaePHP\ApidaeSerializer;
use ApidaePHP\ApidaeSubscriber;
use ApidaePHP\Description\Edit;
use ApidaePHP\Description\User;
use ApidaePHP\Description\Agenda;
use ApidaePHP\Description\Member;
use ApidaePHP\Description\Search;
use ApidaePHP\Description\Exports;
use ApidaePHP\Description\Metadata;
use ApidaePHP\Description\Reference;
use ApidaePHP\Traits\Sso as ApidaeSso;
use GuzzleHttp\Command\ResultInterface;
use ApidaePHP\Exception\ApidaeException;
use GuzzleHttp\Command\CommandInterface;
use GuzzleHttp\Command\Guzzle\Operation;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Command\Guzzle\Description;
use ApidaePHP\Description\TouristicObjects;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\Exception\CommandException;
use ApidaePHP\Exception\InvalidMetadataFormatException;
use GuzzleHttp\Command\Exception\CommandClientException;
use GuzzleHttp\Command\Exception\CommandServerException;

/* Generated with examples/methods.php */

/** 

 * @method array searchAgenda(array $query) 
 * $client->searchAgenda([	
 *	 ?'identifiants' => [0,1,2...],
 *	 ?'identifiers' => ['abc','def',...],
 *	 ?'listeEnregistreeId' => 1234,
 *	 ?'selectionIds' => [0,1,2...],
 *	 ?'center' => ['type' => 'Point', 'coordinates' => [4.8 (lon), 45.3 (lat)]],
 *	 ?'radius' => 1234,
 *	 ?'communeCodesInsee' => ['abc','def',...],
 *	 ?'territoireIds' => [0,1,2...],
 *	 ?'searchQuery' => 'abcd...',
 *	 ?'searchFields' => 'NOM|NOM_DESCRIPTION|NOM_DESCRIPTION_CRITERES',
 *	 ?'criteresQuery' => 'abcd...',
 *	 ?'dateDebut' => '2022-01-05',
 *	 ?'dateFin' => '2022-01-05',
 *	 ?'first' => 1234,
 *	 ?'count' => 1234,
 *	 ?'order' => 'PERTINENCE|NOM|DISTANCE|IDENTIFIANT|DATE_OUVERTURE|RANDOM',
 *	 ?'asc' => ,
 *	 ?'locales' => ['abc','def',...],
 *	 ?'responseFields' => ['@all','informations.moyensCommunication','...'],
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'randomSeed' => 'abcd...',
 *	 ?'membreProprietaireIds' => [0,1,2...],
 *	 ?'searchLocale' => 'abcd...'
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002agendasimplelist-objets-touristiques
 * 
 * /api/v002/agenda/simple/list-objets-touristiques

 * @method array agendaSimpleListObjetsTouristiques(array $query) 
 * $client->agendaSimpleListObjetsTouristiques([	
 *	 ?'identifiants' => [0,1,2...],
 *	 ?'identifiers' => ['abc','def',...],
 *	 ?'listeEnregistreeId' => 1234,
 *	 ?'selectionIds' => [0,1,2...],
 *	 ?'center' => ['type' => 'Point', 'coordinates' => [4.8 (lon), 45.3 (lat)]],
 *	 ?'radius' => 1234,
 *	 ?'communeCodesInsee' => ['abc','def',...],
 *	 ?'territoireIds' => [0,1,2...],
 *	 ?'searchQuery' => 'abcd...',
 *	 ?'searchFields' => 'NOM|NOM_DESCRIPTION|NOM_DESCRIPTION_CRITERES',
 *	 ?'criteresQuery' => 'abcd...',
 *	 ?'dateDebut' => '2022-01-05',
 *	 ?'dateFin' => '2022-01-05',
 *	 ?'first' => 1234,
 *	 ?'count' => 1234,
 *	 ?'order' => 'PERTINENCE|NOM|DISTANCE|IDENTIFIANT|DATE_OUVERTURE|RANDOM',
 *	 ?'asc' => ,
 *	 ?'locales' => ['abc','def',...],
 *	 ?'responseFields' => ['@all','informations.moyensCommunication','...'],
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'randomSeed' => 'abcd...',
 *	 ?'membreProprietaireIds' => [0,1,2...],
 *	 ?'searchLocale' => 'abcd...'
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002agendasimplelist-objets-touristiques
 * 
 * /api/v002/agenda/simple/list-objets-touristiques

 * @method array searchAgendaIdentifier(array $query) 
 * $client->searchAgendaIdentifier([	
 *	 ?'identifiants' => [0,1,2...],
 *	 ?'identifiers' => ['abc','def',...],
 *	 ?'listeEnregistreeId' => 1234,
 *	 ?'selectionIds' => [0,1,2...],
 *	 ?'center' => ['type' => 'Point', 'coordinates' => [4.8 (lon), 45.3 (lat)]],
 *	 ?'radius' => 1234,
 *	 ?'communeCodesInsee' => ['abc','def',...],
 *	 ?'territoireIds' => [0,1,2...],
 *	 ?'searchQuery' => 'abcd...',
 *	 ?'searchFields' => 'NOM|NOM_DESCRIPTION|NOM_DESCRIPTION_CRITERES',
 *	 ?'criteresQuery' => 'abcd...',
 *	 ?'dateDebut' => '2022-01-05',
 *	 ?'dateFin' => '2022-01-05',
 *	 ?'first' => 1234,
 *	 ?'count' => 1234,
 *	 ?'order' => 'PERTINENCE|NOM|DISTANCE|IDENTIFIANT|DATE_OUVERTURE|RANDOM',
 *	 ?'asc' => ,
 *	 ?'locales' => ['abc','def',...],
 *	 ?'responseFields' => ['@all','informations.moyensCommunication','...'],
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'randomSeed' => 'abcd...',
 *	 ?'membreProprietaireIds' => [0,1,2...],
 *	 ?'searchLocale' => 'abcd...'
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002agendasimplelist-identifiants
 * 
 * /api/v002/agenda/simple/list-identifiants

 * @method array agendaSimpleListIdentifiants(array $query) 
 * $client->agendaSimpleListIdentifiants([	
 *	 ?'identifiants' => [0,1,2...],
 *	 ?'identifiers' => ['abc','def',...],
 *	 ?'listeEnregistreeId' => 1234,
 *	 ?'selectionIds' => [0,1,2...],
 *	 ?'center' => ['type' => 'Point', 'coordinates' => [4.8 (lon), 45.3 (lat)]],
 *	 ?'radius' => 1234,
 *	 ?'communeCodesInsee' => ['abc','def',...],
 *	 ?'territoireIds' => [0,1,2...],
 *	 ?'searchQuery' => 'abcd...',
 *	 ?'searchFields' => 'NOM|NOM_DESCRIPTION|NOM_DESCRIPTION_CRITERES',
 *	 ?'criteresQuery' => 'abcd...',
 *	 ?'dateDebut' => '2022-01-05',
 *	 ?'dateFin' => '2022-01-05',
 *	 ?'first' => 1234,
 *	 ?'count' => 1234,
 *	 ?'order' => 'PERTINENCE|NOM|DISTANCE|IDENTIFIANT|DATE_OUVERTURE|RANDOM',
 *	 ?'asc' => ,
 *	 ?'locales' => ['abc','def',...],
 *	 ?'responseFields' => ['@all','informations.moyensCommunication','...'],
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'randomSeed' => 'abcd...',
 *	 ?'membreProprietaireIds' => [0,1,2...],
 *	 ?'searchLocale' => 'abcd...'
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002agendasimplelist-identifiants
 * 
 * /api/v002/agenda/simple/list-identifiants

 * @method array searchDetailedAgenda(array $query) 
 * $client->searchDetailedAgenda([	
 *	 ?'identifiants' => [0,1,2...],
 *	 ?'identifiers' => ['abc','def',...],
 *	 ?'listeEnregistreeId' => 1234,
 *	 ?'selectionIds' => [0,1,2...],
 *	 ?'center' => ['type' => 'Point', 'coordinates' => [4.8 (lon), 45.3 (lat)]],
 *	 ?'radius' => 1234,
 *	 ?'communeCodesInsee' => ['abc','def',...],
 *	 ?'territoireIds' => [0,1,2...],
 *	 ?'searchQuery' => 'abcd...',
 *	 ?'searchFields' => 'NOM|NOM_DESCRIPTION|NOM_DESCRIPTION_CRITERES',
 *	 ?'criteresQuery' => 'abcd...',
 *	 ?'dateDebut' => '2022-01-05',
 *	 ?'dateFin' => '2022-01-05',
 *	 ?'first' => 1234,
 *	 ?'count' => 1234,
 *	 ?'order' => 'PERTINENCE|NOM|DISTANCE|IDENTIFIANT|DATE_OUVERTURE|RANDOM',
 *	 ?'asc' => ,
 *	 ?'locales' => ['abc','def',...],
 *	 ?'responseFields' => ['@all','informations.moyensCommunication','...'],
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'randomSeed' => 'abcd...',
 *	 ?'membreProprietaireIds' => [0,1,2...],
 *	 ?'searchLocale' => 'abcd...'
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002agendadetaillelist-objets-touristiques
 * 
 * /api/v002/agenda/detaille/list-objets-touristiques

 * @method array agendaDetailleListObjetsTouristiques(array $query) 
 * $client->agendaDetailleListObjetsTouristiques([	
 *	 ?'identifiants' => [0,1,2...],
 *	 ?'identifiers' => ['abc','def',...],
 *	 ?'listeEnregistreeId' => 1234,
 *	 ?'selectionIds' => [0,1,2...],
 *	 ?'center' => ['type' => 'Point', 'coordinates' => [4.8 (lon), 45.3 (lat)]],
 *	 ?'radius' => 1234,
 *	 ?'communeCodesInsee' => ['abc','def',...],
 *	 ?'territoireIds' => [0,1,2...],
 *	 ?'searchQuery' => 'abcd...',
 *	 ?'searchFields' => 'NOM|NOM_DESCRIPTION|NOM_DESCRIPTION_CRITERES',
 *	 ?'criteresQuery' => 'abcd...',
 *	 ?'dateDebut' => '2022-01-05',
 *	 ?'dateFin' => '2022-01-05',
 *	 ?'first' => 1234,
 *	 ?'count' => 1234,
 *	 ?'order' => 'PERTINENCE|NOM|DISTANCE|IDENTIFIANT|DATE_OUVERTURE|RANDOM',
 *	 ?'asc' => ,
 *	 ?'locales' => ['abc','def',...],
 *	 ?'responseFields' => ['@all','informations.moyensCommunication','...'],
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'randomSeed' => 'abcd...',
 *	 ?'membreProprietaireIds' => [0,1,2...],
 *	 ?'searchLocale' => 'abcd...'
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002agendadetaillelist-objets-touristiques
 * 
 * /api/v002/agenda/detaille/list-objets-touristiques

 * @method array searchDetailedAgendaIdentifier(array $query) 
 * $client->searchDetailedAgendaIdentifier([	
 *	 ?'identifiants' => [0,1,2...],
 *	 ?'identifiers' => ['abc','def',...],
 *	 ?'listeEnregistreeId' => 1234,
 *	 ?'selectionIds' => [0,1,2...],
 *	 ?'center' => ['type' => 'Point', 'coordinates' => [4.8 (lon), 45.3 (lat)]],
 *	 ?'radius' => 1234,
 *	 ?'communeCodesInsee' => ['abc','def',...],
 *	 ?'territoireIds' => [0,1,2...],
 *	 ?'searchQuery' => 'abcd...',
 *	 ?'searchFields' => 'NOM|NOM_DESCRIPTION|NOM_DESCRIPTION_CRITERES',
 *	 ?'criteresQuery' => 'abcd...',
 *	 ?'dateDebut' => '2022-01-05',
 *	 ?'dateFin' => '2022-01-05',
 *	 ?'first' => 1234,
 *	 ?'count' => 1234,
 *	 ?'order' => 'PERTINENCE|NOM|DISTANCE|IDENTIFIANT|DATE_OUVERTURE|RANDOM',
 *	 ?'asc' => ,
 *	 ?'locales' => ['abc','def',...],
 *	 ?'responseFields' => ['@all','informations.moyensCommunication','...'],
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'randomSeed' => 'abcd...',
 *	 ?'membreProprietaireIds' => [0,1,2...],
 *	 ?'searchLocale' => 'abcd...'
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002agendadetaillelist-identifiants
 * 
 * /api/v002/agenda/detaille/list-identifiants

 * @method array agendaDetailleListIdentifiants(array $query) 
 * $client->agendaDetailleListIdentifiants([	
 *	 ?'identifiants' => [0,1,2...],
 *	 ?'identifiers' => ['abc','def',...],
 *	 ?'listeEnregistreeId' => 1234,
 *	 ?'selectionIds' => [0,1,2...],
 *	 ?'center' => ['type' => 'Point', 'coordinates' => [4.8 (lon), 45.3 (lat)]],
 *	 ?'radius' => 1234,
 *	 ?'communeCodesInsee' => ['abc','def',...],
 *	 ?'territoireIds' => [0,1,2...],
 *	 ?'searchQuery' => 'abcd...',
 *	 ?'searchFields' => 'NOM|NOM_DESCRIPTION|NOM_DESCRIPTION_CRITERES',
 *	 ?'criteresQuery' => 'abcd...',
 *	 ?'dateDebut' => '2022-01-05',
 *	 ?'dateFin' => '2022-01-05',
 *	 ?'first' => 1234,
 *	 ?'count' => 1234,
 *	 ?'order' => 'PERTINENCE|NOM|DISTANCE|IDENTIFIANT|DATE_OUVERTURE|RANDOM',
 *	 ?'asc' => ,
 *	 ?'locales' => ['abc','def',...],
 *	 ?'responseFields' => ['@all','informations.moyensCommunication','...'],
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'randomSeed' => 'abcd...',
 *	 ?'membreProprietaireIds' => [0,1,2...],
 *	 ?'searchLocale' => 'abcd...'
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002agendadetaillelist-identifiants
 * 
 * /api/v002/agenda/detaille/list-identifiants

 * @method string getEditAutorisation(integer $id, string $tokenSSO) 
 * $client->getEditAutorisation([0-9]+, ?'...') ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-decriture/v002autorisationobjet-touristiquemodification
 * 
 * /api/v002/autorisation/objet-touristique/modification/{id}

 * @method string autorisationObjetTouristiqueModification(integer $id, string $tokenSSO) 
 * $client->autorisationObjetTouristiqueModification([0-9]+, ?'...') ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-decriture/v002autorisationobjet-touristiquemodification
 * 
 * /api/v002/autorisation/objet-touristique/modification/{id}

 * @method array confirmExport(string $hash) 
 * $client->confirmExport('...') ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/exports/notificationi-traitement-confirmation
 * 
 * /api/v002/export/confirmation

 * @method array exportConfirmation(string $hash) 
 * $client->exportConfirmation('...') ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/exports/notificationi-traitement-confirmation
 * 
 * /api/v002/export/confirmation

 * @method array getMemberById(integer $id, string $apiKey, string $projetId) 
 * $client->getMemberById([0-9]+) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002membreget-by-id-2
 * 
 * /api/v002/membre/get-by-id/{id}

 * @method array membreGetById(integer $id, string $apiKey, string $projetId) 
 * $client->membreGetById([0-9]+) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002membreget-by-id-2
 * 
 * /api/v002/membre/get-by-id/{id}

 * @method array getMembers(array $query) 
 * $client->getMembers(['selectionIds' => [64, 5896,..],..],..]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002membreget-membres
 * 
 * /api/v002/membre/get-membres

 * @method array membreGetMembres(array $query) 
 * $client->membreGetMembres(['selectionIds' => [64, 5896,..],..],..]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002membreget-membres
 * 
 * /api/v002/membre/get-membres

 * @method array getUserById(integer $id, string $apiKey, string $projetId) 
 * $client->getUserById([0-9]+) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002utilisateurget-by-id
 * 
 * /api/v002/utilisateur/get-by-id/{id}

 * @method array utilisateurGetById(integer $id, string $apiKey, string $projetId) 
 * $client->utilisateurGetById([0-9]+) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002utilisateurget-by-id
 * 
 * /api/v002/utilisateur/get-by-id/{id}

 * @method array getUserByMail(string $eMail, string $apiKey, string $projetId) 
 * $client->getUserByMail('test@test.com') ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002utilisateurget-by-mail
 * 
 * /api/v002/utilisateur/get-by-mail/{eMail}

 * @method array utilisateurGetByMail(string $eMail, string $apiKey, string $projetId) 
 * $client->utilisateurGetByMail('test@test.com') ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002utilisateurget-by-mail
 * 
 * /api/v002/utilisateur/get-by-mail/{eMail}

 * @method array getUsersByMember(integer $membre_id, string $apiKey, string $projetId) 
 * $client->getUsersByMember([0-9]+) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002utilisateurget-by-membre
 * 
 * /api/v002/utilisateur/get-by-membre/{membre_id}

 * @method array utilisateurGetByMembre(integer $membre_id, string $apiKey, string $projetId) 
 * $client->utilisateurGetByMembre([0-9]+) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002utilisateurget-by-membre
 * 
 * /api/v002/utilisateur/get-by-membre/{membre_id}

 * @method array getMetadata(integer $referenceId, string $nodeId, string $targetType, integer $targetId) 
 * $client->getMetadata([0-9]+, '...', ?'general|membre|projet', ?[0-9]+) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/metadonnees/web-service
 * 
 * /api/v002/metadata/{referenceId}/{nodeId}{/targetType}{/targetId}

 * @method array deleteMetadata(integer $referenceId, string $nodeId, string $targetType, integer $targetId) 
 * $client->deleteMetadata([0-9]+, '...', ?'general|membre|projet', ?[0-9]+) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/metadonnees/web-service
 * 
 * /api/v002/metadata/{referenceId}/{nodeId}{/targetType}{/targetId}

 * @method array putMetadata(integer $referenceId, string $nodeId, string $general, string $membres, string $projets, string $node) 
 * $client->putMetadata([0-9]+, '...', ?'...', ?'...', ?'...', ?'...') ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/metadonnees/web-service
 * 
 * /api/v002/metadata/{referenceId}/{nodeId}

 * @method array getReferenceCity(array $query) 
 * $client->getReferenceCity([	
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'communeIds' => [0,1,2...],
 *	 ?'codesInsee' => ['abc','def',...]
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services/v002referentielcommunes
 * 
 * /api/v002/referentiel/communes

 * @method array referentielCommunes(array $query) 
 * $client->referentielCommunes([	
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'communeIds' => [0,1,2...],
 *	 ?'codesInsee' => ['abc','def',...]
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services/v002referentielcommunes
 * 
 * /api/v002/referentiel/communes

 * @method array getReferenceElement(array $query) 
 * $client->getReferenceElement([	
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'elementReferenceIds' => [0,1,2...]
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services/v002referentielelements-reference
 * 
 * /api/v002/referentiel/elements-reference

 * @method array referentielElementsReference(array $query) 
 * $client->referentielElementsReference([	
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'elementReferenceIds' => [0,1,2...]
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services/v002referentielelements-reference
 * 
 * /api/v002/referentiel/elements-reference

 * @method array getReferenceInternalCriteria(array $query) 
 * $client->getReferenceInternalCriteria([	
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'critereInterneIds' => [0,1,2...]
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services/v002referentielcriteres-internes
 * 
 * /api/v002/referentiel/criteres-internes

 * @method array referentielCriteresInternes(array $query) 
 * $client->referentielCriteresInternes([	
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'critereInterneIds' => [0,1,2...]
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services/v002referentielcriteres-internes
 * 
 * /api/v002/referentiel/criteres-internes

 * @method array getReferenceSelection(array $query) 
 * $client->getReferenceSelection([	
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'selectionIds' => [0,1,2...]
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services/v002referentielselections
 * 
 * /api/v002/referentiel/selections

 * @method array referentielSelections(array $query) 
 * $client->referentielSelections([	
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'selectionIds' => [0,1,2...]
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services/v002referentielselections
 * 
 * /api/v002/referentiel/selections

 * @method array getReferenceSelectionsByObject(array $query) 
 * $client->getReferenceSelectionsByObject(['selectionIds' => [64, 5896,..],..],..]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services/v002referentielselections-par-objet
 * 
 * /api/v002/referentiel/selections-par-objet

 * @method array referentielSelectionsParObjet(array $query) 
 * $client->referentielSelectionsParObjet(['selectionIds' => [64, 5896,..],..],..]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services/v002referentielselections-par-objet
 * 
 * /api/v002/referentiel/selections-par-objet

 * @method array searchObject(array $query) 
 * $client->searchObject([	
 *	 ?'identifiants' => [0,1,2...],
 *	 ?'identifiers' => ['abc','def',...],
 *	 ?'listeEnregistreeId' => 1234,
 *	 ?'selectionIds' => [0,1,2...],
 *	 ?'center' => ['type' => 'Point', 'coordinates' => [4.8 (lon), 45.3 (lat)]],
 *	 ?'radius' => 1234,
 *	 ?'communeCodesInsee' => ['abc','def',...],
 *	 ?'territoireIds' => [0,1,2...],
 *	 ?'searchQuery' => 'abcd...',
 *	 ?'searchFields' => 'NOM|NOM_DESCRIPTION|NOM_DESCRIPTION_CRITERES',
 *	 ?'criteresQuery' => 'abcd...',
 *	 ?'dateDebut' => '2022-01-05',
 *	 ?'dateFin' => '2022-01-05',
 *	 ?'first' => 1234,
 *	 ?'count' => 1234,
 *	 ?'order' => 'PERTINENCE|NOM|DISTANCE|IDENTIFIANT|DATE_OUVERTURE|RANDOM',
 *	 ?'asc' => ,
 *	 ?'locales' => ['abc','def',...],
 *	 ?'responseFields' => ['@all','informations.moyensCommunication','...'],
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'randomSeed' => 'abcd...',
 *	 ?'membreProprietaireIds' => [0,1,2...],
 *	 ?'searchLocale' => 'abcd...'
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002recherchelist-objets-touristiques
 * 
 * /api/v002/recherche/list-objets-touristiques

 * @method array rechercheListObjetsTouristiques(array $query) 
 * $client->rechercheListObjetsTouristiques([	
 *	 ?'identifiants' => [0,1,2...],
 *	 ?'identifiers' => ['abc','def',...],
 *	 ?'listeEnregistreeId' => 1234,
 *	 ?'selectionIds' => [0,1,2...],
 *	 ?'center' => ['type' => 'Point', 'coordinates' => [4.8 (lon), 45.3 (lat)]],
 *	 ?'radius' => 1234,
 *	 ?'communeCodesInsee' => ['abc','def',...],
 *	 ?'territoireIds' => [0,1,2...],
 *	 ?'searchQuery' => 'abcd...',
 *	 ?'searchFields' => 'NOM|NOM_DESCRIPTION|NOM_DESCRIPTION_CRITERES',
 *	 ?'criteresQuery' => 'abcd...',
 *	 ?'dateDebut' => '2022-01-05',
 *	 ?'dateFin' => '2022-01-05',
 *	 ?'first' => 1234,
 *	 ?'count' => 1234,
 *	 ?'order' => 'PERTINENCE|NOM|DISTANCE|IDENTIFIANT|DATE_OUVERTURE|RANDOM',
 *	 ?'asc' => ,
 *	 ?'locales' => ['abc','def',...],
 *	 ?'responseFields' => ['@all','informations.moyensCommunication','...'],
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'randomSeed' => 'abcd...',
 *	 ?'membreProprietaireIds' => [0,1,2...],
 *	 ?'searchLocale' => 'abcd...'
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002recherchelist-objets-touristiques
 * 
 * /api/v002/recherche/list-objets-touristiques

 * @method array searchObjectIdentifier(array $query) 
 * $client->searchObjectIdentifier([	
 *	 ?'identifiants' => [0,1,2...],
 *	 ?'identifiers' => ['abc','def',...],
 *	 ?'listeEnregistreeId' => 1234,
 *	 ?'selectionIds' => [0,1,2...],
 *	 ?'center' => ['type' => 'Point', 'coordinates' => [4.8 (lon), 45.3 (lat)]],
 *	 ?'radius' => 1234,
 *	 ?'communeCodesInsee' => ['abc','def',...],
 *	 ?'territoireIds' => [0,1,2...],
 *	 ?'searchQuery' => 'abcd...',
 *	 ?'searchFields' => 'NOM|NOM_DESCRIPTION|NOM_DESCRIPTION_CRITERES',
 *	 ?'criteresQuery' => 'abcd...',
 *	 ?'dateDebut' => '2022-01-05',
 *	 ?'dateFin' => '2022-01-05',
 *	 ?'first' => 1234,
 *	 ?'count' => 1234,
 *	 ?'order' => 'PERTINENCE|NOM|DISTANCE|IDENTIFIANT|DATE_OUVERTURE|RANDOM',
 *	 ?'asc' => ,
 *	 ?'locales' => ['abc','def',...],
 *	 ?'responseFields' => ['@all','informations.moyensCommunication','...'],
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'randomSeed' => 'abcd...',
 *	 ?'membreProprietaireIds' => [0,1,2...],
 *	 ?'searchLocale' => 'abcd...'
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002recherchelist-identifiants
 * 
 * /api/v002/recherche/list-identifiants

 * @method array rechercheListIdentifiants(array $query) 
 * $client->rechercheListIdentifiants([	
 *	 ?'identifiants' => [0,1,2...],
 *	 ?'identifiers' => ['abc','def',...],
 *	 ?'listeEnregistreeId' => 1234,
 *	 ?'selectionIds' => [0,1,2...],
 *	 ?'center' => ['type' => 'Point', 'coordinates' => [4.8 (lon), 45.3 (lat)]],
 *	 ?'radius' => 1234,
 *	 ?'communeCodesInsee' => ['abc','def',...],
 *	 ?'territoireIds' => [0,1,2...],
 *	 ?'searchQuery' => 'abcd...',
 *	 ?'searchFields' => 'NOM|NOM_DESCRIPTION|NOM_DESCRIPTION_CRITERES',
 *	 ?'criteresQuery' => 'abcd...',
 *	 ?'dateDebut' => '2022-01-05',
 *	 ?'dateFin' => '2022-01-05',
 *	 ?'first' => 1234,
 *	 ?'count' => 1234,
 *	 ?'order' => 'PERTINENCE|NOM|DISTANCE|IDENTIFIANT|DATE_OUVERTURE|RANDOM',
 *	 ?'asc' => ,
 *	 ?'locales' => ['abc','def',...],
 *	 ?'responseFields' => ['@all','informations.moyensCommunication','...'],
 *	 ?'apiKey' => 'abcd...',
 *	 ?'projetId' => 1234,
 *	 ?'randomSeed' => 'abcd...',
 *	 ?'membreProprietaireIds' => [0,1,2...],
 *	 ?'searchLocale' => 'abcd...'
 * ]) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002recherchelist-identifiants
 * 
 * /api/v002/recherche/list-identifiants

 * @method array getSsoToken(string $grant_type, string $code, string $redirect_uri) 
 * $client->getSsoToken('authorization_code|client_credentials|refresh_token', '...', 'https://myapp.com/..') ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/oauth/single-sign-on
 * 
 * /oauth/token

 * @method array oauthToken(string $grant_type, string $code, string $redirect_uri) 
 * $client->oauthToken('authorization_code|client_credentials|refresh_token', '...', 'https://myapp.com/..') ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/oauth/single-sign-on
 * 
 * /oauth/token

 * @method array refreshSsoToken(string $grant_type, string $refresh_token, string $redirect_uri) 
 * $client->refreshSsoToken('authorization_code|client_credentials|refresh_token', '...', 'https://myapp.com/..') ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/oauth/single-sign-on
 * 
 * /oauth/token

 * @method array getObjectById(integer $id, string $responseFields, string $locales, string $apiKey, string $projetId) 
 * $client->getObjectById([0-9]+, ?'@all..', ?'fr,en..') ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002objet-touristiqueget-by-id
 * 
 * /api/v002/objet-touristique/get-by-id/{id}

 * @method array objetTouristiqueGetById(integer $id, string $responseFields, string $locales, string $apiKey, string $projetId) 
 * $client->objetTouristiqueGetById([0-9]+, ?'@all..', ?'fr,en..') ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002objet-touristiqueget-by-id
 * 
 * /api/v002/objet-touristique/get-by-id/{id}

 * @method array getObjectByIdentifier(string $identifier, string $responseFields, string $locales, string $apiKey, string $projetId) 
 * $client->getObjectByIdentifier('sitra1234..', ?'@all..', ?'fr,en..') ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002objet-touristiqueget-by-identifier
 * 
 * /api/v002/objet-touristique/get-by-identifier/{identifier}

 * @method array objetTouristiqueGetByIdentifier(string $identifier, string $responseFields, string $locales, string $apiKey, string $projetId) 
 * $client->objetTouristiqueGetByIdentifier('sitra1234..', ?'@all..', ?'fr,en..') ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/api-de-diffusion/liste-des-services-2/v002objet-touristiqueget-by-identifier
 * 
 * /api/v002/objet-touristique/get-by-identifier/{identifier}

 * @method array getUserProfile() 
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/oauth/services-associes-au-sso/v002ssoutilisateurprofil
 * 
 * /api/v002/sso/utilisateur/profil

 * @method array ssoUtilisateurProfil() 
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/oauth/services-associes-au-sso/v002ssoutilisateurprofil
 * 
 * /api/v002/sso/utilisateur/profil

 * @method string getUserPermissionOnObject(integer $id) 
 * $client->getUserPermissionOnObject([0-9]+) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/oauth/services-associes-au-sso/v002ssoutilisateurautorisationobjet-touristiquemodification
 * 
 * /api/v002/sso/utilisateur/autorisation/objet-touristique/modification/{id}

 * @method string ssoUtilisateurAutorisationObjetTouristiqueModification(integer $id) 
 * $client->ssoUtilisateurAutorisationObjetTouristiqueModification([0-9]+) ;
 * 
 * https://dev.apidae-tourisme.com/fr/documentation-technique/v2/oauth/services-associes-au-sso/v002ssoutilisateurautorisationobjet-touristiquemodification
 * 
 * /api/v002/sso/utilisateur/autorisation/objet-touristique/modification/{id}
 */
class Client extends GuzzleClient
{
  use Export;
  use ApidaeSso;

  const NAME = 'apidae-php';
  const VERSION = '2.0.0';

  const META_SCOPE = 'api_metadonnees';
  const SSO_SCOPE  = 'sso';
  const EDIT_SCOPE  = 'api_ecriture';

  /** @var array<mixed> $config */
  protected array $config = [
    'baseUri'       => 'https://api.apidae-tourisme.com/',
    'apiKey'        => null,
    'projetId'      => null,

    /* Auth for metadata */
    'metaClientId' => null,
    'metaSecret'   => null,

    /* Auth for touristic offer edit */
    'editClientId' => null,
    'editSecret'   => null,

    /* Export */
    'exportDir'     => '/tmp/exports/',

    /* For HTTP Client */
    'timeout'           => 0,
    'connectTimeout'    => 0,
    'proxy'             => null,
    'verify'            => true,

    /* For SSO authentication */
    'ssoBaseUrl'        => 'https://base.apidae-tourisme.com',
    'ssoRedirectUrl'    => 'http://localhost/',
    'ssoClientId'       => null,
    'ssoSecret'         => null,

    /* Access tokens by scope */
    'accessTokens'      => [],
  ];

  /** @var array<mixed> $operations */
  public array $operations;

  /** @var ApidaeSerializer $serializer */
  private ApidaeSerializer $serializer;

  /** @var Description $description */
  private Description $description;

  /**
   * @param array<mixed> $config
   */
  public function __construct(array $config = [])
  {
    if (isset($config['projectId'])) $config['projetId'] = $config['projectId'];

    if (isset($config['ssoToken'])) {
      $config['accessTokens'][self::SSO_SCOPE] = $config['ssoToken']['access_token'];
      unset($config['ssoToken']);
    }

    $this->config = array_merge($this->config, $config);

    $this->operations = array_merge(
      Agenda::$operations,
      Edit::$operations,
      Exports::$operations,
      Member::$operations,
      Metadata::$operations,
      Reference::$operations,
      Search::$operations,
      Sso::$operations,
      TouristicObjects::$operations,
      User::$operations,
    );

    $this->description = new Description([
      'name' => self::NAME,
      'apiVersion' => self::VERSION,
      'description' => 'PHP Helper class for Apidae Tourisme API : see https://dev.apidae-tourisme.com',
      'baseUri' => $this->config['baseUri'],
      'operations' => $this->operations,
      'models' => [
        'getResponse' => [
          'type' => 'object',
          'additionalProperties' => [
            'location' => 'json'
          ]
        ],
        'getResponseBody' => [
          'type' => 'object',
          'properties' => [
            'stream' => [
              'location' => 'body',
              'type' => 'string'
            ]
          ]
        ]
      ]
    ]);

    /**
     * custom handler is used for tests
     */
    if (isset($this->config['handler']) === false) {
      $this->config['handler'] = HandlerStack::create();
    }

    $config = array_filter([
      'base_uri' => $this->config['baseUri'],
      'timeout'           => $this->config['timeout'],
      'connect_timeout'   => $this->config['connectTimeout'],
      'proxy'             => $this->config['proxy'],
      'verify'            => $this->config['verify'],
      'handler'           => $this->config['handler'],
    ]);

    $client = new GuzzleHttpClient($config);

    $this->serializer = new ApidaeSerializer($this->description, $client, $this);
    $subscriber = new ApidaeSubscriber($this->description, $this);
    parent::__construct($client, $this->description, $this->serializer);

    $stack = $this->getHandlerStack();
    $stack->before('validate_description', $subscriber);
  }

  /**
   * Execute a single command.
   *
   * @param CommandInterface $command Command to execute
   *
   * @return ResultInterface|false The result of the executed command
   * @throws CommandException
   */
  public function execute(CommandInterface $command): ResultInterface|false
  {
    try {
      return $this->executeAsync($command)->wait();
    } catch (\Exception $e) {
      $this->handleHttpError($e);
    }
    return false;
  }

  /**
   * @param \Exception $e
   * @throws ApidaeException
   * @throws \Exception
   */
  private function handleHttpError(\Exception $e): void
  {
    if ($e->getPrevious() instanceof InvalidMetadataFormatException) {
      throw $e->getPrevious();
    }
    if ($e instanceof CommandClientException) {
      throw new ApidaeException($e);
    }

    if ($e instanceof CommandServerException) {
      throw new ApidaeException($e);
    }

    throw $e;
  }

  public function __call($method, array $args): Result|string
  {
    $commandName = $method;
    /** @var Result $result */
    $result = parent::__call($commandName, $args);

    /** Traitement des retours en string au lieu de json */
    if (isset($result['stream'])) {
      $content = $result['stream']->getContents();
      if (is_string($content) && preg_match('#^"(.*)"$#', $content, $match))
        return $match[1];
    }

    return $result;
  }

  /**
   * @todo n'autoriser la récupération que des clés utiles ailleurs pour éviter toute erreur
   * @todo  Voir s'il vaut mieux lancer une erreur au lieu du return false... ?
   * @param string $var nom de la variable de conf recherchée, ex: ssoBaseUrl
   * @return mixed  Valeur de la variable de conf (ex: https://base.apidae-tourisme.com)
   */
  public function config(string $var): mixed
  {
    if (isset($this->config[$var]))
      return $this->config[$var];
    else
      return false;
  }

  public function getLastRequest(): Request
  {
    return $this->serializer->getLastRequest();
  }

  public function getOperation(string $name): Operation
  {
    return $this->description->getOperation($name);
  }
}
