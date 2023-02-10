<?php

/**
 * SEOmatic plugin for Craft CMS 4
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful, and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2023 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\MetaJsonLd;

/**
 * schema.org version: v15.0-release
 * PsychologicalTreatment - A process of care relying upon counseling, dialogue and communication
 * aimed at improving a mental health condition without use of drugs.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/PsychologicalTreatment
 */
class PsychologicalTreatment extends MetaJsonLd implements PsychologicalTreatmentInterface, TherapeuticProcedureInterface, MedicalProcedureInterface, MedicalEntityInterface, ThingInterface
{
	use PsychologicalTreatmentTrait;
	use TherapeuticProcedureTrait;
	use MedicalProcedureTrait;
	use MedicalEntityTrait;
	use ThingTrait;

	/**
	 * The Schema.org Type Name
	 *
	 * @var string
	 */
	public static string $schemaTypeName = 'PsychologicalTreatment';

	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	public static string $schemaTypeScope = 'https://schema.org/PsychologicalTreatment';

	/**
	 * The Schema.org Type Extends
	 *
	 * @var string
	 */
	public static string $schemaTypeExtends = 'TherapeuticProcedure';

	/**
	 * The Schema.org Type Description
	 *
	 * @var string
	 */
	public static string $schemaTypeDescription = 'A process of care relying upon counseling, dialogue and communication  aimed at improving a mental health condition without use of drugs.';


	/**
	 * @inheritdoc
	 */
	public function getSchemaPropertyNames(): array
	{
		return array_keys($this->getSchemaPropertyExpectedTypes());
	}


	/**
	 * @inheritdoc
	 */
	public function getSchemaPropertyExpectedTypes(): array
	{
		return [
		    'additionalType' => ['URL'],
		    'adverseOutcome' => ['MedicalEntity'],
		    'alternateName' => ['Text'],
		    'bodyLocation' => ['Text'],
		    'code' => ['MedicalCode'],
		    'description' => ['Text'],
		    'disambiguatingDescription' => ['Text'],
		    'doseSchedule' => ['DoseSchedule'],
		    'drug' => ['Drug'],
		    'followup' => ['Text'],
		    'funding' => ['Grant'],
		    'guideline' => ['MedicalGuideline'],
		    'howPerformed' => ['Text'],
		    'identifier' => ['PropertyValue', 'URL', 'Text'],
		    'image' => ['URL', 'ImageObject'],
		    'legalStatus' => ['Text', 'DrugLegalStatus', 'MedicalEnumeration'],
		    'mainEntityOfPage' => ['URL', 'CreativeWork'],
		    'medicineSystem' => ['MedicineSystem'],
		    'name' => ['Text'],
		    'potentialAction' => ['Action'],
		    'preparation' => ['Text', 'MedicalEntity'],
		    'procedureType' => ['MedicalProcedureType'],
		    'recognizingAuthority' => ['Organization'],
		    'relevantSpecialty' => ['MedicalSpecialty'],
		    'sameAs' => ['URL'],
		    'status' => ['MedicalStudyStatus', 'Text', 'EventStatusType'],
		    'study' => ['MedicalStudy'],
		    'subjectOf' => ['Event', 'CreativeWork'],
		    'url' => ['URL']
		];
	}


	/**
	 * @inheritdoc
	 */
	public function getSchemaPropertyDescriptions(): array
	{
		return [
		    'additionalType' => 'An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the \'typeof\' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.',
		    'adverseOutcome' => 'A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or otherwise life-threatening or requiring immediate medical attention), tag it as a seriousAdverseOutcome instead.',
		    'alternateName' => 'An alias for the item.',
		    'bodyLocation' => 'Location in the body of the anatomical structure.',
		    'code' => 'A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.',
		    'description' => 'A description of the item.',
		    'disambiguatingDescription' => 'A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.',
		    'doseSchedule' => 'A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.',
		    'drug' => 'Specifying a drug or medicine used in a medication procedure.',
		    'followup' => 'Typical or recommended followup care after the procedure is performed.',
		    'funding' => 'A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].',
		    'guideline' => 'A medical guideline related to this entity.',
		    'howPerformed' => 'How the procedure is performed.',
		    'identifier' => 'The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for more details.         ',
		    'image' => 'An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].',
		    'legalStatus' => 'The drug or supplement\'s legal status, including any controlled substance schedules that apply.',
		    'mainEntityOfPage' => 'Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.',
		    'medicineSystem' => 'The system of medicine that includes this MedicalEntity, for example \'evidence-based\', \'homeopathic\', \'chiropractic\', etc.',
		    'name' => 'The name of the item.',
		    'potentialAction' => 'Indicates a potential Action, which describes an idealized action in which this thing would play an \'object\' role.',
		    'preparation' => 'Typical preparation that a patient must undergo before having the procedure performed.',
		    'procedureType' => 'The type of procedure, for example Surgical, Noninvasive, or Percutaneous.',
		    'recognizingAuthority' => 'If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.',
		    'relevantSpecialty' => 'If applicable, a medical specialty in which this entity is relevant.',
		    'sameAs' => 'URL of a reference Web page that unambiguously indicates the item\'s identity. E.g. the URL of the item\'s Wikipedia page, Wikidata entry, or official website.',
		    'status' => 'The status of the study (enumerated).',
		    'study' => 'A medical study or trial related to this entity.',
		    'subjectOf' => 'A CreativeWork or Event about this Thing.',
		    'url' => 'URL of the item.'
		];
	}


	/**
	 * @inheritdoc
	 */
	public function getGoogleRequiredSchema(): array
	{
		return ['description', 'name'];
	}


	/**
	 * @inheritdoc
	 */
	public function getGoogleRecommendedSchema(): array
	{
		return ['image', 'url'];
	}


	/**
	 * @inheritdoc
	 */
	public function defineRules(): array
	{
		$rules = parent::defineRules();
		    $rules = array_merge($rules, [
		        [$this->getSchemaPropertyNames(), 'validateJsonSchema'],
		        [$this->getGoogleRequiredSchema(), 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
		        [$this->getGoogleRecommendedSchema(), 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
		    ]);

		    return $rules;
	}
}
