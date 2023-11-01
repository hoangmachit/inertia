<?php

namespace App\Providers;

use App\Repositories\City\CityRepository;
use App\Repositories\City\CityRepositoryInterface;
use App\Repositories\Color\ColorRepository;
use App\Repositories\Color\ColorRepositoryInterface;
use App\Repositories\Comment\CommentRepository;
use App\Repositories\Comment\CommentRepositoryInterface;
use App\Repositories\CommentPhoto\CommentPhotoRepository;
use App\Repositories\CommentPhoto\CommentPhotoRepositoryInterface;
use App\Repositories\CommentVideo\CommentVideoRepository;
use App\Repositories\CommentVideo\CommentVideoRepositoryInterface;
use App\Repositories\Contact\ContactRepository;
use App\Repositories\Contact\ContactRepositoryInterface;
use App\Repositories\Counter\CounterRepository;
use App\Repositories\Counter\CounterRepositoryInterface;
use App\Repositories\Customer\CustomerRepository;
use App\Repositories\Customer\CustomerRepositoryInterface;
use App\Repositories\Device\DeviceRepository;
use App\Repositories\Device\DeviceRepositoryInterface;
use App\Repositories\District\DistrictRepository;
use App\Repositories\District\DistrictRepositoryInterface;
use App\Repositories\File\FileRepository;
use App\Repositories\File\FileRepositoryInterface;
use App\Repositories\Language\LanguageRepository;
use App\Repositories\Language\LanguageRepositoryInterface;
use App\Repositories\News\NewsRepository;
use App\Repositories\News\NewsRepositoryInterface;
use App\Repositories\NewsCat\NewsCatRepository;
use App\Repositories\NewsCat\NewsCatRepositoryInterface;
use App\Repositories\Newsletter\NewsletterRepository;
use App\Repositories\Newsletter\NewsletterRepositoryInterface;
use App\Repositories\NewsList\NewsListRepository;
use App\Repositories\NewsList\NewsListRepositoryInterface;
use App\Repositories\NewsSub\NewsSubRepository;
use App\Repositories\NewsSub\NewsSubRepositoryInterface;
use App\Repositories\NewsTag\NewsTagRepository;
use App\Repositories\NewsTag\NewsTagRepositoryInterface;
use App\Repositories\Order\OrderRepository;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\OrderStatus\OrderStatusRepository;
use App\Repositories\OrderStatus\OrderStatusRepositoryInterface;
use App\Repositories\Page\PageRepository;
use App\Repositories\Page\PageRepositoryInterface;
use App\Repositories\PaymentMethod\PaymentMethodRepository;
use App\Repositories\PaymentMethod\PaymentMethodRepositoryInterface;
use App\Repositories\Permission\PermissionRepository;
use App\Repositories\Permission\PermissionRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\ProductBrand\ProductBrandRepository;
use App\Repositories\ProductBrand\ProductBrandRepositoryInterface;
use App\Repositories\ProductCat\ProductCatRepository;
use App\Repositories\ProductCat\ProductCatRepositoryInterface;
use App\Repositories\ProductItem\ProductItemRepository;
use App\Repositories\ProductItem\ProductItemRepositoryInterface;
use App\Repositories\ProductList\ProductListRepository;
use App\Repositories\ProductList\ProductListRepositoryInterface;
use App\Repositories\ProductSub\ProductSubRepository;
use App\Repositories\ProductSub\ProductSubRepositoryInterface;
use App\Repositories\ProductTag\ProductTagRepository;
use App\Repositories\ProductTag\ProductTagRepositoryInterface;
use App\Repositories\ProductVariant\ProductVariantRepository;
use App\Repositories\ProductVariant\ProductVariantRepositoryInterface;
use App\Repositories\Role\RoleRepository;
use App\Repositories\Role\RoleRepositoryInterface;
use App\Repositories\RolePermission\RolePermissionRepository;
use App\Repositories\RolePermission\RolePermissionRepositoryInterface;
use App\Repositories\Seo\SeoRepository;
use App\Repositories\Seo\SeoRepositoryInterface;
use App\Repositories\SeoPage\SeoPageRepository;
use App\Repositories\SeoPage\SeoPageRepositoryInterface;
use App\Repositories\Setting\SettingRepository;
use App\Repositories\Setting\SettingRepositoryInterface;
use App\Repositories\Sex\SexRepository;
use App\Repositories\Sex\SexRepositoryInterface;
use App\Repositories\Size\SizeRepository;
use App\Repositories\Size\SizeRepositoryInterface;
use App\Repositories\Tags\TagsRepository;
use App\Repositories\Tags\TagsRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\UserLimit\UserLimitRepository;
use App\Repositories\UserLimit\UserLimitRepositoryInterface;
use App\Repositories\UserOneline\UserOnelineRepository;
use App\Repositories\UserOneline\UserOnelineRepositoryInterface;
use App\Repositories\Ward\WardRepository;
use App\Repositories\Ward\WardRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(CityRepositoryInterface::class, CityRepository::class);
        $this->app->singleton(ColorRepositoryInterface::class, ColorRepository::class);
        $this->app->singleton(CommentRepositoryInterface::class, CommentRepository::class);
        $this->app->singleton(CommentPhotoRepositoryInterface::class, CommentPhotoRepository::class);
        $this->app->singleton(CommentVideoRepositoryInterface::class, CommentVideoRepository::class);
        $this->app->singleton(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->singleton(CounterRepositoryInterface::class, CounterRepository::class);
        $this->app->singleton(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->singleton(DeviceRepositoryInterface::class, DeviceRepository::class);
        $this->app->singleton(DistrictRepositoryInterface::class, DistrictRepository::class);
        $this->app->singleton(FileRepositoryInterface::class, FileRepository::class);
        $this->app->singleton(LanguageRepositoryInterface::class, LanguageRepository::class);
        $this->app->singleton(NewsRepositoryInterface::class, NewsRepository::class);
        $this->app->singleton(NewsListRepositoryInterface::class, NewsListRepository::class);
        $this->app->singleton(NewsCatRepositoryInterface::class, NewsCatRepository::class);
        $this->app->singleton(NewsletterRepositoryInterface::class, NewsletterRepository::class);
        $this->app->singleton(NewsSubRepositoryInterface::class, NewsSubRepository::class);
        $this->app->singleton(NewsTagRepositoryInterface::class, NewsTagRepository::class);
        $this->app->singleton(OrderStatusRepositoryInterface::class, OrderStatusRepository::class);
        $this->app->singleton(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->singleton(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->singleton(PageRepositoryInterface::class, PageRepository::class);
        $this->app->singleton(PaymentMethodRepositoryInterface::class, PaymentMethodRepository::class);
        $this->app->singleton(PermissionRepositoryInterface::class, PermissionRepository::class);
        $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->singleton(ProductBrandRepositoryInterface::class, ProductBrandRepository::class);
        $this->app->singleton(ProductListRepositoryInterface::class, ProductListRepository::class);
        $this->app->singleton(ProductItemRepositoryInterface::class, ProductItemRepository::class);
        $this->app->singleton(ProductCatRepositoryInterface::class, ProductCatRepository::class);
        $this->app->singleton(ProductItemRepositoryInterface::class, ProductItemRepository::class);
        $this->app->singleton(ProductSubRepositoryInterface::class, ProductSubRepository::class);
        $this->app->singleton(ProductTagRepositoryInterface::class, ProductTagRepository::class);
        $this->app->singleton(ProductVariantRepositoryInterface::class, ProductVariantRepository::class);
        $this->app->singleton(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->singleton(RolePermissionRepositoryInterface::class, RolePermissionRepository::class);
        $this->app->singleton(SeoRepositoryInterface::class, SeoRepository::class);
        $this->app->singleton(SeoPageRepositoryInterface::class, SeoPageRepository::class);
        $this->app->singleton(SettingRepositoryInterface::class, SettingRepository::class);
        $this->app->singleton(SexRepositoryInterface::class, SexRepository::class);
        $this->app->singleton(SizeRepositoryInterface::class, SizeRepository::class);
        $this->app->singleton(TagsRepositoryInterface::class, TagsRepository::class);
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        $this->app->singleton(UserLimitRepositoryInterface::class, UserLimitRepository::class);
        $this->app->singleton(UserOnelineRepositoryInterface::class, UserOnelineRepository::class);
        $this->app->singleton(WardRepositoryInterface::class, WardRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
