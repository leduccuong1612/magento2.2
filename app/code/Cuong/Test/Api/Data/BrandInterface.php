<?php


namespace Cuong\Test\Api\Data;


interface BrandInterface
{
    const BRAND_ID = "brand_id";
    const BRAND_NAME = "brand_name";
    const BRAND_CONTENT = "brand_content";
    const BRAND_STATUS = "brand_status";
    const BRAND_DATE = "create_at";

    /**
     * @return mixed
     */
    public function getBrandId();

    /**
     * @param $brandId
     * @return mixed
     */
    public function setBrandId($brandId);

    /**
     * @return mixed
     */
    public function getBrandName();

    /**
     * @param $brandName
     * @return mixed
     */
    public function setBrandName($brandName);

    /**
     * @return mixed
     */
    public function getBrandContent();

    /**
     * @param $brandContent
     * @return mixed
     */
    public function setBrandContent($brandContent);

    /**
     * @return mixed
     */
    public function getBrandStatus();

    /**
     * @param $brandStatus
     * @return mixed
     */
    public function setBrandStatus($brandStatus);

    /**
     * @return mixed
     */
    public function getBrandDate();

    /**
     * @param $brandDate
     * @return mixed
     */
    public function setBrandDate($brandDate);

}