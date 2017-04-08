<?php



namespace Miky\Component\Media\Model;

interface GalleryInterface
{
    /**
     * @return string
     */
    public function __toString();

    /**
     * Set name.
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getContext();

    /**
     * @param string $context
     *
     * @return string
     */
    public function setContext($context);

    /**
     * Get name.
     *
     * @return string $name
     */
    public function getName();

    /**
     * Set enabled.
     *
     * @param bool $enabled
     */
    public function setEnabled($enabled);

    /**
     * Get enabled.
     *
     * @return bool $enabled
     */
    public function getEnabled();

    /**
     * Set updated_at.
     *
     * @param \Datetime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * Get updated_at.
     *
     * @return \Datetime $updatedAt
     */
    public function getUpdatedAt();

    /**
     * Set created_at.
     *
     * @param \Datetime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt = null);

    /**
     * Get created_at.
     *
     * @return \Datetime $createdAt
     */
    public function getCreatedAt();

    /**
     * @param string $defaultFormat
     */
    public function setDefaultFormat($defaultFormat);

    /**
     * @return string
     */
    public function getDefaultFormat();

    /**
     * @param array $galleryHasMedias
     */
    public function setGalleryHasMedias($galleryHasMedias);

    /**
     * @return GalleryHasMediaInterface[]
     */
    public function getGalleryHasMedias();

    /**
     * @param GalleryHasMediaInterface $galleryHasMedia
     */
    public function addGalleryHasMedias(GalleryHasMediaInterface $galleryHasMedia);
}