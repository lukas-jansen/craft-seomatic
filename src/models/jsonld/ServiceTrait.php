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

/**
 * schema.org version: v15.0-release
 * Trait for Service.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/Service
 */
trait ServiceTrait
{
    /**
     * The geographic area where the service is provided.
     *
     * @var AdministrativeArea|Place|GeoShape
     */
    public $serviceArea;

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In
     * most cases a broker never acquires or releases ownership of a product or
     * service involved in an exchange.  If it is not clear whether an entity is a
     * broker, seller, or buyer, the latter two terms are preferred.
     *
     * @var Person|Organization
     */
    public $broker;

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @var Organization|Person
     */
    public $provider;

    /**
     * The geographic area where a service or offered item is provided.
     *
     * @var string|Text|Place|GeoShape|AdministrativeArea
     */
    public $areaServed;

    /**
     * A slogan or motto associated with the item.
     *
     * @var string|Text
     */
    public $slogan;

    /**
     * An award won by or for this item.
     *
     * @var string|Text
     */
    public $award;

    /**
     * Human-readable terms of service documentation.
     *
     * @var string|URL|Text
     */
    public $termsOfService;

    /**
     * A review of the item.
     *
     * @var Review
     */
    public $review;

    /**
     * A means of accessing the service (e.g. a phone bank, a web site, a
     * location, etc.).
     *
     * @var ServiceChannel
     */
    public $availableChannel;

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @var Product|Service
     */
    public $isRelatedTo;

    /**
     * The audience eligible for this service.
     *
     * @var Audience
     */
    public $serviceAudience;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     * @var Product|Service
     */
    public $isSimilarTo;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @var Audience
     */
    public $audience;

    /**
     * An associated logo.
     *
     * @var ImageObject|URL
     */
    public $logo;

    /**
     * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
     *
     * @var string|Text
     */
    public $providerMobility;

    /**
     * The hours during which this service or contact is available.
     *
     * @var OpeningHoursSpecification
     */
    public $hoursAvailable;

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     *
     * @var Brand|Organization
     */
    public $brand;

    /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     *
     * @var Thing
     */
    public $serviceOutput;

    /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     *
     * @var Thing
     */
    public $produces;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or
     * Service.
     *
     * @var OfferCatalog
     */
    public $hasOfferCatalog;

    /**
     * A category for the item. Greater signs or slashes can be used to informally
     * indicate a category hierarchy.
     *
     * @var string|URL|CategoryCode|Text|Thing|PhysicalActivityCategory
     */
    public $category;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @var AggregateRating
     */
    public $aggregateRating;

    /**
     * The type of service being offered, e.g. veterans' benefits, emergency
     * relief, etc.
     *
     * @var string|Text|GovernmentBenefitsType
     */
    public $serviceType;

    /**
     * An offer to provide this item—for example, an offer to sell a product,
     * rent the DVD of a movie, perform a service, or give away tickets to an
     * event. Use [[businessFunction]] to indicate the kind of transaction
     * offered, i.e. sell, lease, etc. This property can also be used to describe
     * a [[Demand]]. While this property is listed as expected on a number of
     * common types, it can be used in others. In that case, using a second type,
     * such as Product or a subtype of Product, can clarify the nature of the
     * offer.
     *
     * @var Demand|Offer
     */
    public $offers;
}
