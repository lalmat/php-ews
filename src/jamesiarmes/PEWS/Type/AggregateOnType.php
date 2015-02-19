<?php
/**
 * Contains \jamesiarmes\PEWS\Type\AggregateOnType.
 */

namespace jamesiarmes\PEWS\Type;

use jamesiarmes\PEWS\Type;

/**
 * Represents the property that is used to determine the order of grouped items
 * for a grouped FindItem result set.
 *
 * @package php-ews\Types
 */
class AggregateOnType extends Type
{
    /**
     * Indicates the maximum or minimum value of the property identified by the
     * FieldURI element that is used for ordering the groups of items.
     *
     * The following are the possible values:
     * - Minimum
     * - Maximum
     *
     * @since Exchange 2007
     *
     * @var EWSType_AggregateType
     */
    public $Aggregate;

    /**
     * Identifies extended MAPI properties to get, set, or create.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}