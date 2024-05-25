import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link, usePage } from "@inertiajs/react";
import { HiLockClosed } from "react-icons/hi";

export default function Feature({ feature, answer, children }) {
    const { auth } = usePage().props;
    const availableCredits = auth.user.available_Credits;

    return (
        <AuthenticatedLayout
            user={page.props.auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    {feature.name}
                </h2>
            }
        >
            <Head title={feature.name} />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg-px-8">
                    {answer != null && (
                        <div className="mb-3 py-3 px-5 rounded text-white bg-emerald-600 text-xl">
                            Result of Calculation: {answer}
                        </div>
                    )}
                </div>

                <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
                    {availableCredits != null &&
                        feature.required_credits > availableCredits && (
                            <div className="absolute left-0 top-0 right-0 bottom-0 z-10 flex flex-col items-center justify-center bg-white/70 gap-3">
                                <HiLockClosed className="w-12 h-12 fill-current text-gray-500" />
                                <div>
                                    You Don't have enough credits for this
                                    feature. Go
                                    <Link
                                        href="/"
                                        className="text-emerald-600 hover:text-emerald-500 underline"
                                    >
                                        Buy more Credits
                                    </Link>
                                </div>
                            </div>
                        )}
                    <div className="p-8 text-gray-800 border-b pb-4">
                        <p>{feature.description}</p>
                        <p className="text-sm italic text-right">
                            Required
                            <span className="font-semibold">
                                {feature.required_credits}
                            </span>
                            Credits
                        </p>
                    </div>
                    <div className="p-8">{children}</div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
