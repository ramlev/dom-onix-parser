<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList2;
use Dso\Onix\CodeList\CodeList81;
use Dso\Onix\CodeList\CodeList144;
use Dso\Onix\CodeList\CodeList91;
use Dso\Onix\CodeList\CodeList150;
use Dso\Onix\CodeList\CodeList175;

class DescriptiveDetail
{

    /**
     * ProductComposition
     *
     * @var CodeList2
     */
    protected $ProductComposition;

    /**
     * ProductForm
     *
     * @var CodeList150
     */
    protected $ProductForm;

    /**
     * ProductFormDetail
     *
     * @var CodeList175[]
     */
    protected $ProductFormDetail = [];

    /**
     * ProductFormFeature
     *
     * @var ProductFormFeature[]
     */
    protected $ProductFormFeature = [];

    /**
     * EpubTechnicalProtection
     *
     * @var CodeList144
     */
    protected $EpubTechnicalProtection;

    /**
     * EpubUsageConstraint
     *
     * @var EpubUsageConstraint[]
     */
    protected $EpubUsageConstraint = [];

    /**
     * ProductContentType
     *
     * @var CodeList81[]
     */
    protected $ProductContentType = [];

    /**
     * Measure
     *
     * @var Measure[]
     */
    protected $Measure = [];

    /**
     * CountryOfManufacture
     *
     * @var CodeList91
     */
    protected $CountryOfManufacture;

    /**
     * TitleDetail
     *
     * @var TitleDetail[]
     */
    protected $TitleDetail = [];

    /**
     * Array of Contributors
     *
     * @var Contributor[]
     */
    protected $Contributor = [];

    /**
     * Array of ContributorStatements
     *
     * @var string[]
     */
    protected $ContributorStatement = [];

    /**
     * EditionNumber
     *
     * @var string
     */
    protected $EditionNumber;

    /**
     * Array of Extents
     *
     * @var Extent[]
     */
    protected $Extent = [];

    /**
     * Array of Language
     *
     * @var Language[]
     */
    protected $Language = [];

    /**
     * Array Subject
     *
     * @var Subject[]
     */
    protected $Subject = [];

    /**
     * ProductClassification
     *
     * @var ProductClassification
     */
    protected $ProductClassification;

    /**
     * Array of Collections
     *
     * @var Collection[]
     */
    protected $Collection = [];

    /**
     * Array of Audiences
     *
     * @var Audience[]
     */
    protected $Audience = [];

    /**
     * Set ProductComposition
     *
     * @param CodeList2 $ProductComposition
     * @return void
     */
    public function setProductComposition(CodeList2 $ProductComposition)
    {
        $this->ProductComposition = $ProductComposition;
    }

    /**
     * Set Product Form
     *
     * @param CodeList150 $ProductForm
     * @return void
     */
    public function setProductForm(CodeList150 $ProductForm)
    {
        $this->ProductForm = $ProductForm;
    }

    /**
     * Set ProductFormDetail
     *
     * @param CodeList175 $ProductFormDetail
     * @return void
     */
    public function addProductFormDetail(CodeList175 $ProductFormDetail)
    {
        $this->ProductFormDetail[] = $ProductFormDetail;
    }

    /**
     * Add ProductFormFeature
     *
     * @param ProductFormFeature $ProductFormFeature
     * @return void
     */
    public function addProductFormFeature(ProductFormFeature $ProductFormFeature)
    {
        $this->ProductFormFeature[] = $ProductFormFeature;
    }

    /**
     * Set EpubTechnicalProtection
     *
     * @param CodeList144 $EpubTechnicalProtection
     * @return void
     */
    public function setEpubTechnicalProtection(CodeList144 $EpubTechnicalProtection)
    {
        $this->EpubTechnicalProtection = $EpubTechnicalProtection;
    }

    /**
     * Add EpubUsageConstraint
     *
     * @param EpubUsageConstraint $EpubUsageConstraint
     * @return void
     */
    public function addEpubUsageConstraint(EpubUsageConstraint $EpubUsageConstraint)
    {
        $this->EpubUsageConstraint[] = $EpubUsageConstraint;
    }

    /**
     * Remove an EpubUsageConstraint
     *
     * @param EpubUsageConstraint $EpubUsageConstraint
     * @return void
     */
    public function removeEpubUsageConstraint(EpubUsageConstraint $EpubUsageConstraint)
    {

    }

    /**
     * PrimaryContentType
     *
     * @param string $ProductContentType
     * @return void
     */
    /*public function addProductContentType(CodeList81 $ProductContentType)
    {
        $this->ProductContentType[] = $ProductContentType;
    }*/

    /**
     * PrimaryContentType
     *
     * @param CodeList81 $ProductContentType
     * @return void
     */
    public function addProductContentType(CodeList81 $ProductContentType)
    {
        $this->ProductContentType[] = $ProductContentType;
    }

    /**
     * Add Measure
     *
     * @param Measure $Measure
     * @return void
     */
    public function addMeasure(Measure $Measure)
    {
        $this->Measure[] = $Measure;
    }

    /**
     * Remove Measure
     *
     * @param Measure $Measure
     * @return void
     */
    public function removeMeasure(Measure $Measure)
    {
        
    }

    /**
     * Set CountryOfManufacture
     *
     * @param CodeList91 $CountryOfManufacture
     * @return void
     */
    public function setCountryOfManufacture(CodeList91 $CountryOfManufacture)
    {
        $this->CountryOfManufacture = $CountryOfManufacture;
    }

    /**
     * Add a TitleDetail
     *
     * @param TitleDetail $TitleDetail
     * @return void
     */
    public function addTitleDetail(TitleDetail $TitleDetail)
    {
        $this->TitleDetail[] = $TitleDetail;
    }

    /**
     * Remove a TitleDetail
     *
     * @param TitleDetail $TitleDetail
     * @return void
     */
    public function removeTitleDetail(TitleDetail $TitleDetail)
    {
    }

    /**
     * Add Contributor
     *
     * @param Contributor $Contributor
     * @return void
     */
    public function addContributor(Contributor $Contributor)
    {
        $this->Contributor[] = $Contributor;
    }

    /**
     * Remove Contributor
     *
     * @param Contributor $Contributor
     * @return void
     */
    public function removeContributor(Contributor $Contributor)
    {
    }

    /**
     * Add ContributorStatement
     *
     * @param string $ContributorStatement
     * @return void
     */
    public function addContributorStatement(string $ContributorStatement)
    {
        $this->ContributorStatement[] = $ContributorStatement;
    }

    /**
     * EditionNumber
     *
     * @param string $EditionNumber
     * @return void
     */
    public function setEditionNumber(string $EditionNumber)
    {
        $this->EditionNumber = $EditionNumber;
    }

    /**
     * Add new Extent
     *
     * @param Extent $Extent
     * @return void
     */
    public function addExtent(Extent $Extent)
    {
        $this->Extent[] = $Extent;
    }

    /**
     * Add Subject
     *
     * @param Subject $Subject
     * @return void
     */
    public function addSubject(Subject $Subject)
    {
        $this->Subject[] = $Subject;
    }

    /**
     * Set ProductClassification
     *
     * @param ProductClassification $ProductClassification
     * @return void
     */
    public function setProductClassification(ProductClassification $ProductClassification)
    {
        $this->ProductClassification = $ProductClassification;
    }

    /**
     * Add Collection
     *
     * @param Collection $Collection
     * @return void
     */
    public function addCollection(Collection $Collection)
    {
        $this->Collection[] = $Collection;
    }
    
    /**
     * Remove Collection
     *
     * @param Collection $Collection
     * @return void
     */
    public function removeCollection(Collection $Collection)
    {
        // void
    }

    /**
     * Add Audience
     *
     * @param Audience $Audience
     * @return void
     */
    public function addAudience(Audience $Audience)
    {
        $this->Audience[] = $Audience;
    }

    /**
     * Add Language
     *
     * @param Language $Language
     * @return void
     */
    public function addLanguage(Language $Language)
    {
        $this->Language[] = $Language;
    }

    /**
     * Get ProductComposition
     *
     * @return CodeList2
     */
    public function getProductComposition()
    {
        return $this->ProductComposition;
    }

    /**
     * Get Product Form
     *
     * @return CodeList150
     */
    public function getProductForm()
    {
        return $this->ProductForm;
    }

    /**
     * Get ProductFormDetail
     *
     * @return CodeList175[]
     */
    public function getProductFormDetail()
    {
        return $this->ProductFormDetail;
    }
    
    /**
     * Remove ProductFormDetail
     *
     * @param CodeList175 $ProductFormDetail
     * @return void
     */
    public function removeProductFormDetail(CodeList175 $ProductFormDetail)
    {

    }

    /**
     * ProductFormFeatures
     *
     * @return ProductFormFeature[]
     */
    public function getProductFormFeature()
    {
        return $this->ProductFormFeature;
    }

    /**
     * Get EpubTechnicalProtection
     *
     * @return CodeList144|null
     */
    public function getEpubTechnicalProtection()
    {
        return $this->EpubTechnicalProtection;
    }

    /**
     * Get EpubUsageConstraint
     *
     * @return EpubUsageConstraint[]
     */
    public function getEpubUsageConstraint()
    {
        return $this->EpubUsageConstraint;
    }

    /**
     * Get Measure
     *
     * @return Measure[]
     */
    public function getMeasure()
    {
        return $this->Measure;
    }
    
    /**
     * Get all Measures
     *
     * @return Measure[]
     */
    public function getMeasures()
    {
    	return $this->Measure;
    }

    /**
     * Get CountryOfManufacture
     *
     * @return CodeList91
     */
    public function getCountryOfManufacture()
    {
        return $this->CountryOfManufacture;
    }

    /**
     * Get all Contributors
     *
     * @return Contributor[]
     */
    public function getContributor()
    {
        return $this->Contributor;
    }

    /**
     * Get ContributorStatement
     *
     * @return string[]
     */
    public function getContributorStatement()
    {
        return $this->ContributorStatement;
    }

    /**
     * Get Title detail
     *
     * @return TitleDetail[]
     */
    public function getTitleDetail()
    {
        return $this->TitleDetail;
    }

    /**
     * Get EditionNumber
     *
     * @return string
     */
    public function getEditionNumber()
    {
        return $this->EditionNumber;
    }

    /**
     * Get Extent
     *
     * @return Extent[]
     */
    public function getExtent()
    {
        return $this->Extent;
    }

    /**
     * Remove Extent
     *
     * @param Extent $extent
     * @return Extent[]
     */
    public function removeExtent(Extent $extent)
    {
        return $this->Extent;
    }

    /**
     * Get all Subjects
     *
     * @return Subject[]
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    
    /**
     * Get all Subjects
     *
     * @return Subject[]
     */
    public function getSubjects()
    {
    	return $this->Subject;
    }

    /**
     * Remove Subject
     *
     * @param Subject $Subject
     * @return void
     */
    public function removeSubject(Subject $Subject)
    {
    }

    /**
     * Get ProductClassification
     *
     * @return ProductClassification
     */
    public function getProductClassification()
    {
        return $this->ProductClassification;
    }

    /**
     * Get Collections
     *
     * @return Collection[]
     */
    public function getCollection()
    {
        return $this->Collection;
    }

    /**
     * Get Audience
     *
     * @return Audience[]
     */
    public function getAudience()
    {
        return $this->Audience;
    }

    /**
     * Get ProductContentType
     *
     * @return CodeList81[]
     */
    public function getProductContentType()
    {
        return $this->ProductContentType;
    }

    /**
     * Remove Audience
     *
     * @param Audience $Audience
     * @return void
     */
    public function removeAudience(Audience $Audience)
    {
    }

    /**
     * Get Language
     *
     * @return Language[]
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * Remove Language
     *
     * @param Language $language
     * @return void
     */
    public function removeLanguage(Language $language)
    {
    }

    public function removeProductContentType(CodeList81 $ProductContentType)
    {
    }

    /**
     * Remove a ProductFormFeature
     *
     * @param ProductFormFeature $ProductFormFeature
     * @return void
     */
    public function removeProductFormFeature(ProductFormFeature $ProductFormFeature)
    {
    }
    
    /**
     * Get the height measure of the product, if set
     *
     * @return Measure|null
     */
    public function getHeight()
    {
    	foreach ($this->Measure as $measure) {
    		if ($measure->isHeight()) {
    			return $measure;
    		}
    	}    
    }
    
    /**
     * Get the width measure of the product, if set
     *
     * @return Measure|null
     */
    public function getWidth()
    {
    	foreach ($this->Measure as $measure) {
    		if ($measure->isWidth()) {
    			return $measure;
    		}
    	}    
    }
    
    /**
     * Get the thickness measure of the product, if set
     *
     * @return Measure|null
     */
    public function getThickness()
    {
    	foreach ($this->Measure as $measure) {
    		if ($measure->isThickness()) {
    			return $measure;
    		}
    	}    
    }
    
    /**
     * Get the weight measure of the product, if set
     *
     * @return Measure|null
     */
    public function getWeight()
    {
    	foreach ($this->Measure as $measure) {
    		if ($measure->isWeight()) {
    			return $measure;
    		}
    	}    
    }
    
    /**
     * Get the main content page count, if set
     *
     * @return int|null
     */
    public function getPages(): ?int
    {
        foreach ($this->Extent as $extent) {
            if ($extent->getExtentType()->getCode() === '00') {
                return (int) $extent->getExtentValue();
            }
        }

        return null;
    }

    /**
     * Get all contributors marked as authors
     *
     * @return Contributor[]
     */
    public function getAuthors()
    {
    	return array_filter($this->Contributor, function ($contributor) {
    		return $contributor->isAuthor();
    	});
    }

}
